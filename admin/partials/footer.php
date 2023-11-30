</div>
<ul class="navbar">
                <li><a href="?page=home"><i class="fa fa-user"></i><span>Home </span></a></li>
                <li><a href="?page=products"><i class="fa-solid fa-bag-shopping"></i><span>Products</span> </a></li>
                <li><a href="?page=users"><i class="fa fa-user"></i><span>Users</span></a></li>
                <li><a href="?page=categories"><i class="fa-regular fa-calendar-days"></i></i><span>Categories</span></a></li>
                <li><a href="?page=add_user"><i class="fa fa-plus"></i><span>Add User </span></a></li>
                <li><a href="?page=add_products"><i class="fa fa-plus"></i><span>Add Products </span></a></li>
                <li><a href="?page=add_category"><i class="fa fa-plus"></i><span>Add Category</span></a></li>
            </ul>
        </nav>
       
<script>
            $(function(){
                $(".btn-bars").click(function(){
                    $(".navbar").toggleClass("hideNav","slow");
                });
                $(".avator").click(function(){
                    $(".navbar-right").toggleClass("hidden","slow");
                });
            });
        </script>
        
    </body>
</html>