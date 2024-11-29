<?php include("head.php"); ?>

<title></title>
 <meta name="description" content="">
</head>

 <?php include("header.php"); ?>

 .top-section {
    background-color: #2c3e50;
    color: white;
    padding: 20px;
    text-align: center;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.top-section h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
}

.top-section span {
    color: #3498db;
}

section {
    margin: 40px 20px;
    padding: 20px;
}

.intro {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 30px;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 1s forwards;
}

.intro .photo img {
    border-radius: 50%;
    width: 150px;
    height: 150px;
    object-fit: cover;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

.intro .text h2 {
    font-size: 2rem;
    color: #2c3e50;
}

.intro .text p {
    font-size: 1rem;
    color: #555;
}

.works ul {
    list-style-type: none;
    padding: 0;
}

.works ul li {
    background: #ecf0f1;
    margin: 10px 0;
    padding: 10px;
    border-radius: 5px;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 1s forwards;
    animation-delay: 0.5s;
}

footer {
    text-align: center;
    padding: 20px;
    background-color: #2c3e50;
    color: white;
}

@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}




 
 <?php include("footer.php"); ?>
</body>
</html>