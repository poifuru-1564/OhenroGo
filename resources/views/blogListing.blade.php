<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Lists</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/blogListing.css')}}" rel="stylesheet" />
    </head>
    

    <body>
        <style>
            .body {
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .categories {
                display: flex;
                position: sticky;
                justify-content: center;
                align-items: center;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 7vh;
                background-color: #ffffff;
                z-index: 1000; 
                
                
            }
            .category-toggle-button {
                display: flex;
                align-items: center;
                background-color: #75AD6F;
                border: none;
                color: white;
                padding: 1em 2em;
                cursor: pointer;
                margin: 1vh; 
                text-size-adjust: auto;
                font-size: 1em;
            }

            .post-category {
                justify-content: center;
                align-items: center;
                background-color: #75AD6F;
                border: none;
                color: white;
                padding: 0.5em 2em;
                width: auto;
                margin: 0.5vh;
            }

            .card-img-top {
                width: 100%;
                height: auto;
            }

            .category-toggle-button.active {
                background-color: #63935e;
                color: white;
                border: none;
            }

            .blog-card {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding-top: 1vh;
                width: 70vw;
                height: auto;  
                background-color:#FFECC3;
                justify-content: flex-start;
                margin-top: 7vh;
            }
            
            .blog-listing-content {
                display: flex;
                justify-content: center;
                top: 10vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-bottom: 2vh;

            }
            .side-buttons {
                position: fixed;
                top: 80%;
                right: 3vw;
                display: flex;
                flex-direction: column;
                gap: 2vh;

            }
            .blog-body {
                padding: 1.5em;
                font-size: 1.2em;
                color: black;
                background-color: #ffffff;
                width: 60vw;
                height: auto;
            }

            .side-button {
                background-color: #FF7E1C;
                width: 7vw;
                height: 7vh;
                border: none;
                color: white;
                padding: 1em 1em;
                cursor: pointer;
            }
            .blog-card-header {
                display: flex;
                justify-content: space-between;
                width: 60vw;
                align-items: center;
                padding: 1em;
                font-size: 1.5em;
                color:black;
            }
            .likes {
                display: flex;
                justify-content: flex-start;
                padding: 1.5em;
                font-size: 1.5em;
                color:black;
                margin: 0;
                width: 85%;
            }

        </style>
        <!-- Categories-->
        <div class="categories">
                <button class="category-toggle-button" type="button" >Prefectures</button>
                <button class="category-toggle-button" type="button" >Location</button>
                <button class="category-toggle-button" type="button" >Status</button>
                <button class="category-toggle-button" type="button" >Topic</button>
                <button class="category-toggle-button" type="button" >User Role</button>
        </div>
 

        <!-- Page content-->
        <div class="blog-listing-content">
                <!-- Blog entries-->
                    <!-- Blog post cards-->
                    <div class="blog-card">
                        <div class="blog-card-header">
                            <div class="userID">User ID</div>
                            <div class="date">January 1, 2023</div>
                        </div>

                        <div class="blog-body">
                            <h2 class="blog-title">Post Title</h2>
                            <box class="post-category" type="box" >Prefectures</box>
                            <box class="post-category" type="box" >Location</box>
                            <box class="post-category" type="box" >Status</box>
                            <box class="post-category" type="box" >Topic</box>
                            <box class="post-category" type="box" >User Role</box>
                            <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                            <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                                
                        </div>
                        <div class="likes">Liked by</div>

                    </div>

                    <!-- Blog post cards-->
                    <div class="blog-card">
                        <div class="blog-card-header">
                        <div class="userID">User ID</div>
                        <div class="date">January 1, 2023</div>
                        </div>

                        <div class="blog-body">
                            <h2 class="blog-title">Post Title</h2>
                            <box class="post-category" type="box" >Prefectures</box>
                            <box class="post-category" type="box" >Location</box>
                            <box class="post-category" type="box" >Status</box>
                            <box class="post-category" type="box" >Topic</box>
                            <box class="post-category" type="box" >User Role</box>
                            <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                            <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                            <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                            <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                            <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>

                            
                            <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                                
                        </div>
                        <div class="likes">Liked by</div>

                    </div>

        </div>

        <!-- side buttons-->
        <div class="side-buttons">
            <button class="side-button">Manage Your Blog</button>
            <button class="side-button">Log out</button>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>





