 ## Inventory & Stock Management System

A multi-role Inventory & Supply Chain Management platform developed to streamline warehouse operations, procurement workflows, inventory tracking, supplier management, and administrative monitoring for product-based businesses. The system is designed using the MVC architecture with secure role-based authentication and database management using PHP and MySQL.

The platform enables different users to perform specific operational tasks through dedicated dashboards and permission-based access control, ensuring better inventory visibility, procurement efficiency, and overall warehouse management.

 # Project Overview

This system helps businesses manage products, warehouses, suppliers, stock movements, and procurement activities from a centralized platform. The application supports multiple user roles including Warehouse Staff, Purchasing Officer, Manager, and Admin, where each role has separate responsibilities and system permissions.

# The project includes:

Inventory and warehouse management
Procurement and supplier management
Stock movement tracking
Purchase order approval workflow
Inventory analytics and reporting
Role-based dashboards
AJAX-powered dynamic features
Secure authentication and session management
Audit logs and activity monitoring
Technologies Used
Technology	Purpose
PHP	Backend Development
MySQL	Database Management
HTML5	Structure & Layout
CSS3	Styling & UI Design
JavaScript	Client-side Interaction
AJAX	Dynamic Data Loading
MVC Pattern	Project Architecture
Git & GitHub	Version Control
XAMPP	Local Server Environment
 # Team Members & Assigned Roles

Mahfuj Rahman --Purchasing Officer
Rabby --Warehouse Staff
[....] --Manager
[....] --Admin

# Role-Based System Features:
# Warehouse Staff
Record stock-in and stock-out transactions
Monitor warehouse inventory levels
Manage stock adjustments
View product locations inside warehouses
Submit discrepancy reports
Track transaction history
# Purchasing Officer
Create and manage purchase orders
Monitor low-stock products
Manage supplier procurement workflow
Track delivery status
Generate procurement reports and analytics
Maintain supplier-product pricing records
# Manager
Manage products and categories
Approve or reject purchase orders
Monitor inventory across warehouses
Generate inventory and supplier reports
Resolve discrepancy reports
Manage warehouse configuration
# Admin
Manage user accounts and permissions
Configure system-wide settings
Access audit logs and analytics
Monitor overall platform activity
Manage warehouse activation status
Generate monthly system reports
# Core Functionalities
 Module	            Description
Authentication System	Secure login with session-based role access
Inventory Management	Track stock movements and warehouse inventory
Procurement Management	Manage suppliers and purchase orders
Warehouse Management	Handle warehouse zones and product locations
Reporting & Analytics	Generate reports and monitor system performance
Audit Logging	Maintain complete activity history
AJAX Features	Dynamic product search and real-time updates
Database Tables

The system uses a shared relational database designed for inventory and procurement management.

# Table Name	Description
users	Stores all system users and roles
warehouses	Warehouse location information
warehouse_zones	Storage zones inside warehouses
categories	Product category records
suppliers	Supplier company information
supplier_products	Supplier-product pricing records
products	Product catalog and stock details
product_locations	Product storage locations
purchase_orders	Procurement order records
purchase_order_items	Purchase order line items
stock_transactions	Inventory movement history
stock_discrepancy_reports	Inventory issue reports
activity_logs	System-wide audit logs
# Security & Validation
Role-based access control implemented
Secure authentication using PHP sessions
MySQL prepared statements used for all database queries
Server-side form validation with descriptive error handling
Protected routes for all authorized users
# Development Workflow
MVC architecture followed throughout development
Modular and maintainable code structure
Feature-based Git branching workflow
Collaborative development using GitHub repositories
Compatible with XAMPP Apache Server environment 
