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
        <link href="{{asset('../css/blogListing.css')}}" rel="stylesheet" />
        <script src="{{ asset('../js/blogListing.js') }}"></script>
    </head>
    

    <body>
        <!-- Categories-->
        <div class="categories">
            <div class="category-item">
                <button class="category-toggle-button" type="button" >Prefectures</button>
                <div class ="category-menu">
                    <p>Prefecture 1</p>
                    <p>Prefecture 2</p>
                    <p>Prefecture 3</p>
                    <p>Prefecture 4</p>
                </div>
            </div>
            <div class="category-item">
                <button class="category-toggle-button" type="button" >Location</button>
                <div class ="category-menu">
                    <p>Location 1</p>
                    <p>Location 2</p>
                    <p>Location 3</p>
                    <p>Location 4</p>
                </div>
            </div>
            <div class="category-item">
                <button class="category-toggle-button" type="button" >Status</button>
                <div class ="category-menu">
                    <p>Status 1</p>
                    <p>Status 2</p>
                    <p>Status 3</p>
                    <p>Status 4</p>
                </div>
            </div>
            <div class="category-item">
                <button class="category-toggle-button" type="button" >Topic</button>
                <div class ="category-menu">
                    <p>Topic 1</p>
                    <p>Topic 2</p>
                    <p>Topic 3</p>
                    <p>Topic 4</p>
                </div>
            </div>
            <div class="category-item">
                <button class="category-toggle-button" type="button" >User Role</button>
                <div class ="category-menu">
                    <p>User Role 1</p>
                    <p>User Role 2</p>
                    <p>User Role 3</p>
                    <p>User Role 4</p>
                </div>
            </div>
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
                            <div class="post-categories" type="box" >
                                <box class="post-category" type="box" >Prefectures</box>
                                <box class="post-category" type="box" >Location</box>
                                <box class="post-category" type="box" >Status</box>
                                <box class="post-category" type="box" >Topic</box>
                                <box class="post-category" type="box" >User Role</box>
                            </div>
                            <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                            <img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." />
                                
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
                            <div class="post-categories" type="box" >
                                <box class="post-category" type="box" >Prefectures</box>
                                <box class="post-category" type="box" >Location</box>
                                <box class="post-category" type="box" >Status</box>
                                <box class="post-category" type="box" >Topic</box>
                                <box class="post-category" type="box" >User Role</box>
                            </div>
                            <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                            <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                            <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                            <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                            <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>

                            
                            <img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." />
                                
                        </div>
                        <div class="likes">Liked by</div>

                    </div>

        </div>

        <!-- side buttons-->
        <div class="side-buttons">
            <div class="upper-side-buttons"></div>
            <div class="low-side-buttons">
                <a href="/manageOwnBlog"><button class="side-button">Manage Your Blog</button></a>
                <a href="/login"><button class="side-button">Log out</button></a>
            </div>
        </div>
    </body>
</html>





