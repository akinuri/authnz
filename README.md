# AuthNZ System

I have created several authnz systems previously, and they all differ because of the existing systems/apps. I haven't had a chance to use an off-the-shelf solution. I bet there are many. Also, depending on the subject, I'm not that open to using off-the-shelf solutions because their sales pitches and/or documentations sucks.

I want to learn/understand the underlying mechanics of things, not just get things done. And this tendency of mine usually conflicts with the sucky sales pitches and/or documentations of off-the-self solutions. So I usually end up doing things myself, if I can and have the time.

Thinking that there'll be another time that I'll have to create an authz system, I thought I should create an outline of it in public space to help me and others.

## Topics

* DB Schema
  * Settings
  * Users
    * Users (Credentials)
      * User Disabling
    * Email Verifications
    * Log (in/out) Events
    * "Remember Me" Tokens
    * Lockout Events
    * Password Resets
  * Access Control (RBAC)
      * Roles (maybe hierarchical)
      * Permissions
      * Role Permissions
      * User Permissions
* Sign Up
  * Password Hashing
  * Email Verification
* Log In
  * Authentication
    * Credentials Check
    * Redirecting
    * Retrieving Roles and Permissions
    * Session Management
      * Storing Credentials
      * Timeout
  * 2FA
  * OpenID
  * Suspicious Login Activity Alert
* Other
  * Periodic Email Verification
  * Removing Linked Devices
    * Remember Me Tokens
  * Account Recovery
    * Password Resetting
    * Security Question
    * Alternative Email/Phone
* Request
  * Authentication
    * Cookie: Remember Me Token Check
    * Session: Logged User Check
    * Rotations
      * Session ID
      * User Credentials
      * Remember Me Token
  * Authorization
    * Rotations
      * User Roles/Permissions
* Restricted Page Request
  * Permissions Check
  * Unauthorized Access Handling

