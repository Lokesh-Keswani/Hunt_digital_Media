#!/usr/bin/env python3
"""
Selenium script to automate login testing on Laravel login page
Fills email and password fields with random values
"""

import time
import random
import string
import sys
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.firefox.service import Service as FirefoxService
from webdriver_manager.chrome import ChromeDriverManager
from webdriver_manager.firefox import GeckoDriverManager


def generate_random_string(length=10):
    """Generate a random string of specified length"""
    return ''.join(random.choices(string.ascii_lowercase + string.digits, k=length))


def generate_random_email():
    """Generate a random email address"""
    username = generate_random_string(8)
    return f"{username}@test.com"


def test_login_with_chrome():
    """Test login with Chrome"""
    try:
        options = webdriver.ChromeOptions()
        options.add_argument('--no-sandbox')
        options.add_argument('--disable-dev-shm-usage')
        options.add_argument('--disable-gpu')
        
        driver = webdriver.Chrome(
            service=Service(ChromeDriverManager().install()),
            options=options
        )
        return driver
    except Exception as e:
        print(f"Chrome failed: {str(e)}")
        return None


def test_login_with_firefox():
    """Test login with Firefox"""
    try:
        options = webdriver.FirefoxOptions()
        options.add_argument('--no-sandbox')
        options.add_argument('--disable-dev-shm-usage')
        
        driver = webdriver.Firefox(
            service=FirefoxService(GeckoDriverManager().install()),
            options=options
        )
        return driver
    except Exception as e:
        print(f"Firefox failed: {str(e)}")
        return None


def test_login():
    """Test login with random credentials"""
    
    # Try Chrome first, then Firefox
    print("Attempting to initialize WebDriver...")
    driver = test_login_with_chrome()
    
    if driver is None:
        print("Chrome not available, trying Firefox...")
        driver = test_login_with_firefox()
    
    if driver is None:
        print("ERROR: No browser driver available. Please install Chrome or Firefox.")
        sys.exit(1)
    
    try:
        # Open the login page
        print("Opening Laravel login page...")
        driver.get("http://localhost/login")
        print("Page loaded successfully")
        
        # Wait for page to load
        wait = WebDriverWait(driver, 15)
        
        # Generate random credentials
        email = generate_random_email()
        password = generate_random_string(16)
        
        print(f"Generated random email: {email}")
        print(f"Generated random password: {password}")
        
        # Find and fill email field
        print("Finding email field...")
        email_input = wait.until(
            EC.presence_of_element_located((By.NAME, "email_address")),
            message="Email field not found"
        )
        email_input.clear()
        email_input.send_keys(email)
        print(f"✓ Filled email field with: {email}")
        
        # Wait a moment
        time.sleep(1)
        
        # Find and fill password field
        print("Finding password field...")
        password_input = wait.until(
            EC.presence_of_element_located((By.NAME, "password")),
            message="Password field not found"
        )
        password_input.clear()
        password_input.send_keys(password)
        print(f"✓ Filled password field with: {password}")
        
        # Wait a moment to see the filled form
        time.sleep(2)
        
        print("\n✓ Test completed successfully!")
        print(f"  Email: {email}")
        print(f"  Password: {password}")
        
        # Get page title for verification
        print(f"  Page Title: {driver.title}")
        
        print("\nClosing browser...")
        
    except Exception as e:
        print(f"\nError during login automation: {str(e)}")
        import traceback
        traceback.print_exc()
        
    finally:
        # Close the browser
        try:
            driver.quit()
            print("✓ Browser closed. Script finished.")
        except:
            pass


if __name__ == "__main__":
    test_login()
