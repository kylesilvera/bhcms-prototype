# Test Report

## Test 1: Valid Customer Login
**Steps:**
- Navigate to `login.php`
- Enter **customer1** / **pass123**
- Click **Log In**

**Expected Result:** Redirects to `menu.php`  
**Actual Result:** Redirects to `menu.php`  
**Pass/Fail:** Pass

---

## Test 2: Valid Staff Login
**Steps:**
- Navigate to `login.php`
- Enter **staff1** / **pass123**
- Click **Log In**

**Expected Result:** Redirects to `staff_orders.php`  
**Actual Result:** Redirects to `staff_orders.php`  
**Pass/Fail:** Pass

---

## Test 3: Invalid Login (Wrong Password)
**Steps:**
- Navigate to `login.php`
- Enter **customer1** / **wrongpass**
- Click **Log In**

**Expected Result:** Shows **Invalid credentials** message  
**Actual Result:** Shows **Invalid credentials** message  
**Pass/Fail:** Pass

---

## Test 4: Access Menu Without Login
**Steps:**
- Open `menu.php` URL directly without logging in

**Expected Result:** Redirects to `login.php`  
**Actual Result:** Redirects to `login.php`  
**Pass/Fail:** Pass

---

## Test 5: Empty Order Submission
**Steps:**
- Log in as **customer1**
- On `menu.php`, leave all quantities at **0**
- Click **Place Order**

**Expected Result:** Shows **No items selected. Back to menu** message  
**Actual Result:** Shows **No items selected. Back to menu** message  
**Pass/Fail:** Pass

---

## Test 6: Valid Order Submission
**Steps:**
- Log in as **customer1**
- On `menu.php`, set quantities (e.g., **2 Espresso**, **1 Cappuccino**)
- Click **Place Order**

**Expected Result:** Shows **Order #X placed! Back to menu** confirmation  
**Actual Result:** Shows **Order #1 placed! Back to menu** confirmation  
**Pass/Fail:** Pass

---

## Test 7: Logout Functionality
**Steps:**
- Log in as **customer1**
- Click **Log out**
- Attempt to revisit `menu.php`

**Expected Result:** Redirects to `login.php`  
**Actual Result:** Redirects to `login.php`  
**Pass/Fail:** Pass

---

## Test 8: Customer Cannot Access Staff View
**Steps:**
- Log in as **customer1**
- Navigate directly to `staff_orders.php`

**Expected Result:** Shows **Access denied**  
**Actual Result:** Shows **Access denied**  
**Pass/Fail:** Pass

---

## Test 9: Staff View Lists Pending Orders
**Steps:**
- Place an order as **customer1**
- Log in as **staff1**
- Open `staff_orders.php`

**Expected Result:** Pending order appears with correct customer and timestamp  
**Actual Result:** Pending order appears with correct customer and timestamp  
**Pass/Fail:** Pass

---

## Test 10: Staff View Order Details
**Steps:**
- On `staff_orders.php`, click **View Details** for an order

**Expected Result:** Displays ordered item names & quantities  
**Actual Result:** Displays ordered item names & quantities  
**Pass/Fail:** Pass
