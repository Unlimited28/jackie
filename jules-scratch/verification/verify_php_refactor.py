import os
from playwright.sync_api import sync_playwright, expect

def run_verification():
    with sync_playwright() as p:
        browser = p.chromium.launch()
        page = browser.new_page()

        # Get the absolute path to the file
        # This is tricky because the PHP files expect to be served, not opened directly.
        # The asset() helper and includes will likely fail.
        # Let's try to navigate to the server URL anyway, in case the server did start
        # and the exit code was a red herring.

        try:
            page.goto("http://localhost:8000/login", timeout=5000)

            # Check for a key element on the login page
            heading = page.get_by_role("heading", name="Welcome Back")
            expect(heading).to_be_visible()

            # Take a screenshot
            screenshot_path = "jules-scratch/verification/verification.png"
            page.screenshot(path=screenshot_path)
            print(f"Screenshot saved to {screenshot_path}")

        except Exception as e:
            print(f"An error occurred: {e}")
            # Let's check the server log
            with open("php_server.log", "r") as f:
                print("PHP Server Log:")
                print(f.read())

        finally:
            browser.close()

if __name__ == "__main__":
    run_verification()
