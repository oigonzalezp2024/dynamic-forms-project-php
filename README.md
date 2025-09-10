# 📋 Dynamic Forms Project in PHP

This project is a system for generating dynamic web forms, built in PHP 8.2 and following a DDD (Domain-Driven Design) and **Screaming Architecture** approach. The main goal is to allow the creation and customization of forms through a simple configuration file, decoupling the logic from the presentation.

-----

### 🚀 Key Features

  * **Dynamic Generation:** Forms are defined in a configuration file (`config.php`) and are rendered automatically.
  * **Custom Themes:** Different styles (`theme-minimal`, `theme-azul`, `theme-verde`, `theme-oscuro`) can be assigned to each form.
  * **Reusable Fields:** It supports various input field types, such as text, email, passwords, text areas, selectors, checkboxes, and radio buttons.
  * **Solid Architecture:** The project is structured in layers (Domain, Infrastructure, Application) to facilitate scalability and maintenance.

-----

### System Architecture

  * **Domain**: Defines interfaces (`CreateFormInterface`, `CreateViewInterface`).
  * **Infrastructure**: Implements the construction logic (`CreateForm`, `CreateView`).
  * **Application**: Orchestrator (`CreateViewOfForms`).
  * **Config**: Centralizes the form definition (`config.php`).

-----

### ✅ Implemented Security Controls

The project has undergone a security review to ensure its robustness. The following security controls have been implemented:

  * **XSS Prevention:** The `htmlspecialchars()` function is used consistently on all dynamic data outputs, which prevents the injection of malicious client-side code.
  * **Class Autoloading:** The use of **Composer** (`vendor/autoload.php`) simplifies dependency management and avoids manual file inclusion, reducing security errors.

-----

## 🔐 Current Security Status

### ✅ Implemented Controls

  * **Output Data Escaping**
    Consistent use of `htmlspecialchars()` on dynamic fields, labels, and values, which **mitigates reflected XSS attacks**.

  * **Layered Architecture**
    Reduces exposure of sensitive logic and makes it easier to apply security in a localized manner.

  * **Use of Composer (`vendor/autoload.php`)**
    A modern standard that avoids manual `require` and minimizes unsafe inclusion errors.

-----

### ⚠️ Identified Risks

1.  **Dynamic `formAction` without validation**
    Could point to external domains → **phishing** or **form hijacking** risk.

2.  **Lack of CSRF protection**
    No anti-CSRF tokens exist → risk of request forgery.

3.  **Lack of HTTPS enforcement**
    Allows `http://`, exposing sensitive data in plain text.

4.  **Insufficient validation in `$data`**
    The type and format of fields are not validated before rendering.

5.  **Sensitive fields without additional attributes**
    Example: passwords without `autocomplete="new-password"`.

6.  **HTTP security headers not configured**
    Lack of CSP, HSTS, X-Frame-Options, among others.

7.  **Basic session management**
    `session_id` is not regenerated, possible **session fixation** vulnerability.

-----

### ⚠️ Security Risks and Recommendations

Although the project is secure in its presentation layer, it is not ready to be published in a production environment without implementing additional controls. The following risks and recommendations must be addressed critically:

1.  **CSRF Protection:** It is essential to add an anti-CSRF token to all forms to prevent an attacker from tricking users into submitting malicious requests.
2.  **Data Validation:** A validation layer must be implemented in the **backend** to ensure that the data received (both in the configuration and in the form processing) complies with the expected type and format.
3.  **Backend Security:** The script that processes the form data (`formAction`) must use **prepared statements** to interact with the database, which is fundamental to preventing SQL injection.
4.  **HTTPS Enforcement:** It must be ensured that requests are made exclusively via **HTTPS** to encrypt communication and protect data confidentiality. It is recommended to configure the **HSTS** header on the server.
5.  **HTTP Security Headers:** For additional protection, it is recommended to configure HTTP headers such as **CSP**, **X-Frame-Options**, and **Referrer-Policy**.
6.  **Password Fields:** For a better user experience and security, password fields should have the `autocomplete="new-password"` attribute.
7.  **Session Management:** If the system includes user sessions, it is crucial to implement **session ID regeneration** and configure secure cookies (`httponly`, `secure`, `samesite`).

-----

### 📄 Deployment Checklist

Before publication, it must be verified that the following security measures have been implemented:

  - [ ] Protection against **CSRF**.
  - [ ] Rigorous validation of all input data.
  - [ ] Data processing with **prepared statements** or **ORM**.
  - [ ] Exclusive use of **HTTPS**.
  - [ ] Configuration of **HTTP security headers**.
  - [ ] Appropriate `autocomplete` attributes on sensitive fields.
  - [ ] **Session ID regeneration**.

-----

## 🛠️ Security Recommendations

### 🔒 `$data` Validation

  * Create a **FormDataValidator** that:
      * Ensures that `formAction` points only to trusted domains.
      * Validates `fieldType` against a whitelist (`text`, `email`, `password`, `radio`, `checkbox`, etc.).
      * Removes unexpected fields.

### 🔒 CSRF Protection

  * Generate CSRF tokens (`bin2hex(random_bytes(32))`).
  * Insert into each form as a hidden field.
  * Validate in the backend before processing data.

### 🔒 Enforce HTTPS

  * Reject any `formAction` with `http://`.

  * Configure **HSTS** on the server:

    ```
    Strict-Transport-Security: max-age=31536000; includeSubDomains; preload
    ```

### 🔒 Security on Sensitive Fields

  * Password fields with:

    ```html
    <input type="password" name="user_pass" required autocomplete="new-password">
    ```

  * Disable `autocomplete` on critical data.

### 🔒 Recommended HTTP Headers

Add in `index.php`:

```php
header("X-Frame-Options: DENY");
header("X-Content-Type-Options: nosniff");
header("X-XSS-Protection: 1; mode=block");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("Content-Security-Policy: default-src 'self'; style-src 'self' 'unsafe-inline'; script-src 'self';");
```

### 🔒 Secure Session Management

```php
session_start();
session_regenerate_id(true);
session_set_cookie_params([
     'httponly' => true,
     'secure'   => true, // Only if there's HTTPS
     'samesite' => 'Strict',
]);
```

-----

## ✅ Pre-deployment Security Checklist

  * [ ] **FormDataValidator** implemented.
  * [ ] `formAction` validated against trusted domains.
  * [ ] **CSRF token active** on all forms.
  * [ ] **HTTPS mandatory** with HSTS on the server.
  * [ ] `autocomplete` controlled on sensitive fields.
  * [ ] Security headers configured.
  * [ ] Session regeneration active.
  * [ ] Basic logging and auditing enabled.

-----

## 📌 Conclusion

The project is in a **good security state at the presentation layer**, thanks to consistent output sanitization. However, it is **not production-ready** until key controls such as **`$data` validation**, **CSRF tokens**, and **HTTPS enforcement** are implemented.

With these improvements, the system will achieve an **appropriate corporate security level for real-world environments**.

-----

## 👥 Authors

  * **Oscar Gonzalez** – Software Developer
  * **Yomar Fernandez** – Accountant in training