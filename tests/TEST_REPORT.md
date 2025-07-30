# Test Cases Documentation

**Project Version:** PP 1.0  
**Prepared by:** KSSHFP  
**Date:** 07-28-2025

---

## FT-1: Login Screen - Valid Customer Login

**Purpose:** Checks whether customer login allows for customer account access only

**Pre-requisite:** User has a valid customer account

**Test Strategy:**
- Navigate to `login.php`
- Enter **customer1** / **pass123**
- Click **Log In**

**Expected Results:** Redirects to menu.php  
**Observations:** ✅ Redirects to menu.php

---

## FT-2: Login Screen - Valid Staff Login

**Purpose:** Checks whether staff login allows for staff account access only

**Pre-requisite:** User has a valid staff account

**Test Strategy:**
- Navigate to `login.php`
- Enter **staff1** / **pass123**
- Click **Log In**

**Expected Results:** Redirects to staff_orders.php  
**Observations:** ✅ Redirects to staff_orders.php

---

## FT-3: Login Screen - Invalid Login

**Purpose:** Checks whether login form does not allow input for invalid data

**Pre-requisite:** User is on login page

**Test Strategy:**
- Navigate to `login.php`
- Enter **customer1** / **wrongpass**
- Click **Log In**

**Expected Results:** Shows **Invalid credentials** message  
**Observations:** ✅ Shows **Invalid credentials** message

---

## FT-4: Menu Screen - Access Menu Without Login

**Purpose:** Checks whether application blocks menu access without login

**Pre-requisite:** User is not logged in

**Test Strategy:**
- Open `menu.php` URL directly without logging in

**Expected Results:** Redirects to login.php  
**Observations:** ✅ Redirects to login.php

---

## FT-5: Menu Screen - Empty Order Submission

**Purpose:** Checker for invalid order form submission

**Pre-requisite:** User has a customer account

**Test Strategy:**
- Log in as **customer1**
- On `menu.php`, leave all quantities at **0**
- Click **Place Order**

**Expected Results:** Shows **No items selected. Back to menu** message  
**Observations:** ✅ Shows **No items selected. Back to menu** message

---

## FT-6: Menu Screen - Valid Order Submission

**Purpose:** Checks for valid order submission

**Pre-requisite:** User has a customer account

**Test Strategy:**
- Log in as **customer1**
- On `menu.php`, set quantities (e.g., **2 Espresso**, **1 Cappuccino**)
- Click **Place Order**

**Expected Results:** Shows **Order #1 placed! Back to menu** confirmation  
**Observations:** ✅ Shows **Order #1 placed! Back to menu** confirmation

---

## FT-7: Menu Screen - Logout Button

**Purpose:** Checks whether logout button successfully logs out user

**Pre-requisite:** User has a valid customer account

**Test Strategy:**
- Log in as **customer1**
- Click **Log out**
- Attempt to revisit `menu.php`

**Expected Results:** Redirects to login.php  
**Observations:** ✅ Redirects to login.php

---

## FT-8: Login Screen - User Restrictions

**Purpose:** Checks whether application restricts access based on role

**Pre-requisite:** User has a valid customer account

**Test Strategy:**
- Log in as **customer1**
- Navigate directly to `staff_orders.php`

**Expected Results:** Shows **Access denied**  
**Observations:** ✅ Shows **Access denied**

---

## FT-9: Staff Order Screen - View Pending Orders

**Purpose:** Checks whether order screen correctly displays pending orders

**Pre-requisite:** User is logged in under a customer account

**Test Strategy:**
- Place an order as **customer1**
- Log in as **staff1**
- Open `staff_orders.php`

**Expected Results:** Pending order appears with correct customer and timestamp  
**Observations:** ✅ Pending order appears with correct customer and timestamp

---

## FT-10: Staff Order Screen - View Order Details

**Purpose:** Checks whether order screen displays order details

**Pre-requisite:** User is logged in under a staff account

**Test Strategy:**
- On `staff_orders.php`, click **View Details** for an order

**Expected Results:** Displays ordered item names & quantities  
**Observations:** ✅ Displays ordered item names & quantities

---

## Test Summary

| Test Case | Status | Description |
|-----------|--------|-------------|
| FT-1 | ✅ Pass | Valid customer login |
| FT-2 | ✅ Pass | Valid staff login |
| FT-3 | ✅ Pass | Invalid login handling |
| FT-4 | ✅ Pass | Unauthorized menu access blocked |
| FT-5 | ✅ Pass | Empty order validation |
| FT-6 | ✅ Pass | Valid order submission |
| FT-7 | ✅ Pass | Logout functionality |
| FT-8 | ✅ Pass | Role-based access control |
| FT-9 | ✅ Pass | Staff order viewing |
| FT-10 | ✅ Pass | Order details display |

**Total Tests:** 10  
**Passed:** 10  
**Failed:** 0  
**Success Rate:** 100%