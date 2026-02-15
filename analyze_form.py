#!/usr/bin/env python3
"""
Script to analyze the login form structure
"""

import requests
from bs4 import BeautifulSoup

# Fetch the login page
response = requests.get('http://localhost/login')
soup = BeautifulSoup(response.content, 'html.parser')

print("=" * 60)
print("FORM ANALYSIS - Login Page")
print("=" * 60)

# Find all forms
forms = soup.find_all('form')
print(f"\nFound {len(forms)} form(s)")

for i, form in enumerate(forms):
    print(f"\n--- Form {i+1} ---")
    print(f"Method: {form.get('method', 'GET')}")
    print(f"Action: {form.get('action', 'N/A')}")
    print(f"ID: {form.get('id', 'N/A')}")
    print(f"Class: {form.get('class', 'N/A')}")
    
    # Find all input fields in this form
    inputs = form.find_all('input')
    print(f"\nInput fields found: {len(inputs)}")
    
    for j, input_field in enumerate(inputs):
        print(f"  {j+1}. "
              f"Type: {input_field.get('type', 'text')}, "
              f"Name: {input_field.get('name', 'N/A')}, "
              f"ID: {input_field.get('id', 'N/A')}, "
              f"Placeholder: {input_field.get('placeholder', 'N/A')}")

# Also find all input elements outside forms
all_inputs = soup.find_all('input')
print(f"\n--- All Input Elements (total: {len(all_inputs)}) ---")
for i, inp in enumerate(all_inputs[:10]):
    print(f"{i+1}. Name: {inp.get('name', 'N/A')}, Type: {inp.get('type', 'text')}, ID: {inp.get('id', 'N/A')}")
