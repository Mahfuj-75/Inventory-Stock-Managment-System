<!DOCTYPE html>
<html>
<head>

    <title>Inventory Management System</title>

 <style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{

    font-family:Arial, sans-serif;
    background:#f4f6f9;
}


/* Container */

.container{

    width:90%;
    margin:auto;
    padding-top:20px;
}


/* Navbar */

.navbar{

    background:#1e293b;
    padding:18px;
    border-radius:8px;
    margin-bottom:25px;
}

.navbar a{

    color:white;
    text-decoration:none;
    margin-right:18px;
    font-size:15px;
    transition:0.3s;
}

.navbar a:hover{

    color:#38bdf8;
}


/* Card */

.card{

    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0px 2px 10px rgba(0,0,0,0.1);
    margin-bottom:25px;
}


/* Dashboard Cards */

.dashboard-box{

    display:flex;
    gap:20px;
    flex-wrap:wrap;
}

.box{

    flex:1;
    min-width:220px;
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0px 2px 10px rgba(0,0,0,0.1);
    transition:0.3s;
}

.box:hover{

    transform:translateY(-5px);
}

.box h3{

    margin-bottom:10px;
    color:#333;
}

.box p{

    font-size:28px;
    font-weight:bold;
    color:#2563eb;
}


/* Table */

table{

    width:100%;
    border-collapse:collapse;
    margin-top:20px;
    background:white;
    border-radius:8px;
    overflow:hidden;
}

table th{

    background:#1e293b;
    color:white;
    padding:14px;
    text-align:left;
}

table td{

    padding:12px;
    border-bottom:1px solid #ddd;
}

table tr:hover{

    background:#f1f5f9;
}


/* Inputs */

input,
select,
textarea{

    width:100%;
    padding:12px;
    margin-top:8px;
    margin-bottom:15px;
    border:1px solid #ccc;
    border-radius:6px;
}


/* Button */

button{

    background:#2563eb;
    color:white;
    padding:12px 20px;
    border:none;
    border-radius:6px;
    cursor:pointer;
    transition:0.3s;
}

button:hover{

    background:#1d4ed8;
}


/* Heading */

h2{

    margin-bottom:20px;
    color:#1e293b;
}

</style>

</head>

<body>

<div class="container">