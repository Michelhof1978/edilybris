.nav-group {
            display: flex;
            gap: 1rem;
        }

        .nav-group a {
            color: #fff;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .nav-group a:hover {
            background-color: #555;
        }

        main {
            padding: 1rem;
        }

        .card-container {
            display: grid;
            gap: 1rem;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.02);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-content {
            padding: 1rem;
        }

        .card-content h3 {
            margin: 0 0 0.5rem;
            font-size: 1.5rem;
        }

        .card-content p {
            margin: 0;
            font-size: 1rem;
            color: #555;
        }

        @media (max-width: 768px) {
            header {
                flex-direction: column;
                text-align: center;
            }

            .nav-group {
                flex-wrap: wrap;
                justify-content: center;
            }

            .card-container {
                grid-template-columns: 1fr;
            }

            .card img {
                height: 150px;
            }
        }