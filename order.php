
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Orders</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/dashstyles.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="rounded-circle " src="images/kidsfan.jpg" width="40px" height="40px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active ml-3" aria-current="page" href="admindashboard.php">
                            <span class="text-light">HOMe</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="order.php">
                            <span class="text-light">ORDERS</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">
                            <span class="text-light"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="rates.php">
                            <span class="text-light">RATES</span>
                        </a>
                    </li>
                    <li class="nav-item">

                    </li>
                </ul>
                <i class="fa fa-envelope fa-2x m-2"></i>
                <i class="fa fa-bell fa-2x m-2"></i>




                <div class="dropdown">
                    <div class= dropdown-toggle" type="button" id="dropdownMenu" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="rounded-circle m-3" src="images/maleavator.png" height="30" width="30">
                    </div>
                    <ul class="dropdown-menu bg-purple" aria-labelledby="dropdownMenu">
                        <li><a class="dropdown-item" href="registration11.php">
                                <span class="text-light"><i class="fa fa-user m-3"></i>Profile</span></a>
                            <hr>
                        </li>
                        <li><a class="dropdown-item" href="#">
                                <span class="text-light"><i class="fa fa-cog m-3 "></i>Settings</span></a>
                            <hr>
                        </li>


                        <li><a class="dropdown-item" href="#">
                                <span class="text-light"><i class="fa fa-sign-out" aria-hidden="true"></i>LogOut</span></a>
                            <hr>
                        </li>

                    </ul>
                </div>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>

        </div>

    </nav>

</header>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center bg-danger p-4 text-white">
            <img height="50px" width="50px" class="float-start" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANsAAADmCAMAAABruQABAAAAh1BMVEX39/cAAAD////6+vr29vby8vLZ2dnk5OTKysq3t7cZGRnv7++hoaHGxsa/v7+FhYXQ0NCMjIx6enrn5+dsbGywsLAxMTFVVVWWlpYoKCjf39+zs7NnZ2dHR0deXl6np6c+Pj5RUVGUlJSenp42NjZ8fHwhISEjIyMPDw87OztDQ0NycnIUFBQ51N4pAAAQx0lEQVR4nO0da3fqIKwD3/X91nl1zrm5x///fdeqJYFCS4DW7Rzz6Z7rgARCXiRpFD3gAQ94wAMe8IAHSMA5Zyqc/+/eaPnBlaa40Xs+jAbfm+0ige3mezA6PPca8ZXGeyNJh4SsqNFeTl+ezPA5XbYbtT9FYELXuj3Io0qicNBe8z9B35mu5mx6sqQrhdN01jyf372Rz4Pz9g9HKyJdKawGQ/5byTsj1hpTD0w5vnHrN5LHWWPQ8SLsCp1B43dRx1lt9hWAsCt8zWq/hjzOmgObE1nN3z7f5iub0x00fwV1nA03OVh+7I/d9nA9qd80eSLs65P1sN0dLD5yxm2Gd6fuTNnChN6/QTs1PhTtxXlqsrRH/0zDF/el7kzZXo/Ydje0MTgSEmvDneHg93ekjq23OpTeXs+KioBV8sfD10/tFjVZifibgdWPOkbsOhkYiTnT1bHnsV49dZztsoh8LD0sp4S8pcao2VXNmKzxlkHiLNo80TiTN5xm5v1sVHl0nGcU2uk1DrK/nMXLjOE2qM5LYENVM61m4ezA80wzlTU/htUcHecjZeV5m4ddmvH+XFljVMXRsaYird/bJSzLeVvhjc916UfHnpUN7QY+sxQ4VwVxu1ziOB/L6x3j8hZksaJAj2XyJY9lfnwpWTqzhhx0eYlLI44N5X0sX6tmLISy5CVrS8vsJ1XIZRbvK7h0bFnxoV1BPbplCcQx6WLPy5fIsHJTUnbH4CszyccaVxoqVaTzJixxnEve9axqv0PWqtuQO8s5vtCdSu3yK7DGO8JgEZA4ibR/5SmZPBRi7Lnug6EgMeTUZc8ukR9eS+D6T4cpOPbsFoGIYzgqMiLz45mYeqs7XrxdA5Odt8Wx26o70Mew/7ENci/YN5qyS5wyeSQY6ULOLyN66J910QTfAYiTdosoIJNHgpzXjyM1RsdmXhyUmQ5bBTSD5+yDFb0vfhJ9P8ns23kSx3qupHH2bBP57zyTzk4iruVFHF+jqZ4pU7GWGhUwwbxFoU7S4k0faVlDQRkKC/B6NhRnhiklvoovyYpOEcyDpD/F/pY42Qb6lMmRP+KuCfAsY/tZONM9x/18bcaDwWC8+frR/Dog8CX2SA6OxHHkZi8IpNX2Kuafo34MuUE87o8yLxv7OoE4xE5DtytXA9U0j6yn4BMlcDq/vH7g8fzysqHImtWEgCWMPdUIFAnAHpv9urwpK+uF4ZEgCf3Lr5KnNWH/YJiLN4c1Sc96PG/KnJZneWReJu1FOmvBKHoEhccw+tWetFg6tXaBhOByeOlk7z1hMUf2udB9JciRCF+ijYXaYnUcq5gT8AOGpioCvKGE3cTekF0gTA5j2aOJ+YrIlXUY2XNiFPsoqRTRtddXHNkHddtBl/UgsGQfMsP68IkQ42PYaLXXV0iFU8J6vCGGvduPipBiI1mxWLhSTER4xWoQFD/EXVr2+4icWMJaCaC9JLiciE/+2Q8CQWJvRmJ3yF4f3gAb1/YqHN2ctu0gDodtf0uRjHQI2bODGE0Q6SDxPixpQyEX+/gIYpC9i23O9mI8QZxA/MTSu6yJAS8EYQe6lGL0CkAmIsFWYBCQsft70FL2O4ikATXMly4L3GIviRC3WGlGODaCiQ1BzHdXV5iJW04IPSJnxeavYf8ISgo2xFpiqYCks71PhlSjBb9wYclTwgjiUq/c42pM6P4ZQRULPfBTOIhDjIwgE0CSeAREwWqmRDBABj0X4ctEfh3FSANF4+Ti3wAYm2D8gln5VoAwB4fW3j6IeN9BDGjQFAKpT1gbblyBWAe5M6WEDI8OSGnQFFtE4Rkmwrz5ch1xLyU4xoS77cOSiCmL2AsD0nG5EgLMOnvLGuNECT/oll+47BF4Lbn6G8QwRU2BUWIfNdIvL0wiipMErJyngOB4TxSUQOt6XTeMJc0CECo55yJBIJ/0KAmcTJCtOgAfkBTnB694YB7GnpyQBNsgJozSgdCTpMQm5BYbh4FyIzg3EVIcHd/MCJZmyNAi4UxkCxhDIKCmaJaT8Cvnvs/rwiqi+bdgrRmZkokHapp7KYQw7bh1M6UHQFJBSC13DONAlNNmBoy+vGnbu80EKs6gPEC7EF1nMfPnnc4NMaUhDgXhGOL7vzAnPJy320yp8UY0cMBgNlxUJ2vuglFqrRa7h0U4pjeeYqlfUBCumdZag8eDHA2on1jIV1/9FjujIKwO7dMMaHeq5QQhFmKsXAWQZuScOHEwWosKZA3pySdyNwNzJiIbpsKi0V44nv5KlFHY5vHMjQPWIRumcDKakcAPVF732RYCggVDxbZo7gWULdEZC3Dyy2WO3fcI2HmXRQGMeXp2G2xaYRwtFz/hBzpkDguzS+NCCJPAQUmBA+GVRgzPXPYvmoBDqhp1Z57O6xLzEBfOhylR6oHDJGJjsiEDOFO6KMFxNI+ICdizVKvkMlrci4wTA2xFCMbDaHGTXbY8nUSEPVzCLvAkkWFo+Mkpaw+Y0vH5DdvyJycMRBwrczg5R2qFGCQpuIZf4TXAyQKAS5UZDsFyJ6ZCAWmX+xpha9dtd4F1MrEWoX6pDk46Hqo/nAxm9Kjs+F4i3r4zSkDkXTiGvdFzim0+hDwekoocM+OFElip4wW3E15L5amBpxw2Hh27I08jL1K98UJvOpvyKOmPLCtxoqGrf8teDTMAS7lmpUuFQJR8/2QoqEf3ek/wkBWmBhfMRXXfJke51aSMLpx97P7KBS/1ivMHms/9KQZnf1NODp+ao/y/LC+mUawPiDd4PDNJSFqH3aWkXiIzYwASFKMLiHZwLwBNXAdoVwMu1277xCSMrGc8UBpIFe5zi1ppuaeSV1V62bRFXOqxNarlI8tqUnuef35LN8qmLZLKME+znK40jM+kkqoX+6If7dJl03ZGT+6O9tOtG+px6ju5ZvOfH2kV0HYWDmqTvGlfbvt36U/cUwsbvZskWNw3Hzl5BU1p3/6110wL4Hizt9xn/sLVikQkCNqUJwEIKXimUSSgNKhJofOSgL54OEA7GbN+E0R7hvQvwCbGjpla+ArRnsdslwSwJ/F0bGffjfgUpj2P2Z4UtqCzH4BnY6wx1hOigXEjSEts8ANUm9TffxPA9X0kc2C1XPtTZ/TfICfKt78E431jd9scWPR9e88JvzsTWBbxCr80QRbtXPuZf+wiv6WN8ZIguT0s6hoQt4ODD3UsrRnPvJxCRN/dOWSzXOHYWa0+VvltsX1EpohPZl4TwPVyDKFx1jJw48v40G9MUF3+pNE/jA39z1c9R+pA0meeW3KeCqyAxdpey5tdI/vpkVtX7Ia+Z/TWre1jznsA/KR5Uy2eWNeRePXayG3plFDYeNW0OXFizJzHGu6cthIlh5YR+6fR2kYjJ5/2GGUaY+wdjg4sdM3zZroCvTRPigFd5+jbN3HiOo1IjwmJCKLmTds5/yHbbPmb+ukGzhrfyhzklso852wgnE7LW+FK88unqYv9xNlaoY7Ymg4C45o7BXeRlEfB1vJt2bt+buN8djJn/pBaXEL+hsaRAS+HVAzTkvHpe9i8nPVlxU4JvIMo0bGd0OuE7FXFwz76hnMi+eoSumZBqrk2x1CwhPUrkazVOgGa6LIh7jNJyHcXKkxr64P/YxsykUmb1oJ4z9HUhTgIKGgTXCAcZHnhZNJ8u9PBtDOHaUHKG0zG9OeMA6SfTrprAZs6swae2O7OQQWeIYdeXDgbDSdJyHnQPqk8xg8gNtIShLzBtYZyKItmD1IXwH2Qq4Ymj/ZodoudBtQNoSxAt7j2hNeRyg7aE/g6Pe48ZNH+CTSAaSOgarHQP0XdW0L3cr4tgHy7wixY8EuN1RfgexcFKXHIP0xX2ewSiLgitwtY0hiBBP+0ICCE28SEa3WsYoPMywKXB6o6zK9QUCSWm5OFe2PNA4sRtEoNScvcKwcvb6YSsQgzZa76xhfdPWeiEHADutyoqVWZLEqGy6ntwC1XfV8icwE3/MpLF4LMyzx2A8Y1P+dgjgxmaBnQwWleZoTEXufmR0IBhPnPIEpbjvQnryUCygUhOjgTU5gSdcro+HVPsIL3YoSAc/OdM8hjNN1eYNtyL9sVEOJzk8UhJFtB6ieSJvp7iTwQ/+d3C0BWgl6cFGKM5hLGlKEAQTDJTwUceYaa0Lkd7e/AacWmGcRRdWYnklwBEhpsACGkS6dF/kgxQpAUrZNMoqLHrTOcC4Bb+aP7VUhSC48aXags//K8H0sCdDJZdYp+tEkGzjsacN1LV21oUTiaLELiUK36VKArpdYTox6rXu3taYBKD9QrhZStnYkEB6fuE6iSCo8NH5zqK4I3/W631+jGyT4qSrau7LZd1oVLJbsdiMVsU++R6SFZqI5doPwBOj1IUSpktVtXEaFrJTEBSJKKdJtASN/JCYUdCE2gwflE3rxNW56SgAkvFV0G9FxLiNng4CNwJTwYVGJJYoCAAIT7eR3ccspzKEr0B4kI17BSSZIAGMQQpUKlV8T8OvCb0oC8RRCwPICrnipW9BxB6d0dSeIknQ1cd8/OcC4A9+EW7MDFP/aC5DYZnPjXdSho0Ap8UhXAR73dERTYpmdFoi7714AeEy8A1ZMWoeLvKzIosE1ttyJzZZIFDladS9W8NwAfJTJR+piIw1ajTuiJYMxtolE+SC1IsI5y+yQoKt09xRxu8x2uG9YCI4YfyOzeeLPTod355OAp0fk7BKDepBzlXrp2hcSv6lth9ng3T3NERhCEX6/cv7SKP7Uobp9rAbgnQCYCkgM+SfFck3nr3OjCDzKfYX8SmtdxwjibXV2xfyNQySRpUr6DpJ2xkZmxckO5NEyyOa0VRoEwSNXjVwbyvhyZLOv7qADJCLxAiLc/qWib2Hk5KMjJlf41UQkwqdzL0RAIgIaUbR9KEzGc9tcpLTEhH3iEMyvD2etSuf1H8y5+gPQZx5ChX+nk6J9kCoCAlBcd1suSPnT99BqkQNQeOPqk01OYz1tjkIu2F4SvkfoDr0t1TOEjiEpFut83mGkrD0/lkqbmEdOLShyBc1m/lpOuo9Q52LQnCbCo1OCkPH5hTbkysfyjUw9tVZ7+4ZFcnNjxKVGxWI71PqT1tp51I/kgfeYzWa1ERc6aSpmnw/cAaQvKl+7MmJSPplMWqo+UlcoXzbyuFhkuC7oCuQCLDsoqi6AlCAbQ1M0eamHvHatlauDD9MqwWLqZaU/yGgdbm7N4qU7/VZ19zlm2twC5yNQ09TrbHaRbqf3KJtlS9a9nX9bkLGpnO9ZsQ3SloaHR/8hg8TRu2dc+Z2dkw2N2yvdydagBF66KsgsqgyFnZHuFn8cMB5rNejpUZLaqwGLNPj89nb7bE2ZPX9J6IG6Ptf0xjm69FUIAZ0215vwGL4N+0pCrgMBLz4hJf2ToifHdvAM7Iux0Yi1lz82hv67d2mAofTAujTBq6/5hqmPEK2UBegh5AmeTbB81BKvtoNtuNZpxvZbQxGv1uNlotbuDraYDBsBgcnfKEuCs3n3Pw5MM74YGgXcBxnraPitOsOmxu0kQLZwtpa5BJJDgpRvOegsIjDWXn8XY58Dncv3LjgzgLP0mO5fOYwksus0gvePKgzN5tdaI1sbwbIqOevVfTtgNEkNj2N3YNVj72B6G8d+gK4XEKJkMZ6O
            NWYvNN6PZMOnb9ZfoSuFqftQmZ1W9O4wGx3ECx8HosDsr80kt07frDwJPbSzorMb/PFEPeMADHvCABzzgAQ94wAN+J/wH87C97ohqB+MAAAAASUVORK5CYII=">
            <h2 ><i class="fa fa-account></i>">ADMIN DASHBOARD</h2>
        </div>
    </div>

</div>


<div class="container-fluid">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success m-3 p-3 float-end" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        <span><i class="fa fa-plus m-2"></i>New order</span>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title" id="staticBackdropLabel">create a new order</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-purple">
                    <form action="handleorder.php" method="post" class="mt-5 mb-5  p-5 shadow bg-gradient">
                        <h3 class="mb-5 text-center">Place Your Order</h3>


                        <div class="row">

                            <div class="mb-3 col-md-12">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control rounded-pill" required placeholder="mickeymouse@example.com">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-12" >
                                <label for="service">Choose service</label>
                                <select name="service" id="service" >
                                    <option value="Laundry" class="btn-light">Cooking</option>
                                    <option value="Laundry" class="btn-light">Laundry</option>
                                    <option value="Housekeeping" class="btn-light" >Housekeeping</option>
                                    <option value="Electrical Repair" class="btn-light">Electrical Repair</option>
                                    <option value="Electrical Installation" class="btn-light">Electrical Installation</option>
                                    <option value="Baby Sitting" class="btn-light">Baby Sitting</option>
                                    <option value="Gardening and Landscaping" class="btn-light">Gardening and Landscaping</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label>work hours</label>
                            <input type="text" name="workhours" class="form-control rounded-pill" required  placeholder="Enter time work is to take " >
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-12"

                            <label>Gender</label><br>
                            <input type="radio" name="gender" value="Male" >Male
                            <input type="radio" name="gender" value="Female" >Female
                            <input type="radio" name="gender" value="Other" >Other
                        </div>
                </div>


                <div class="row flex">
                    <div class="mb-3 col-md-6 float-end float-end option">
                        <label for="residence">Residence</label>
                        <select name="residence" id="residence">
                            <option value="Nairobi">Nairobi</option>
                            <option value="Coast">Coast</option>
                            <option value="RiftValley">RiftValley</option>
                            <option value="Western">Western</option>
                            <option value="Nyanza">Nyanza</option>
                            <option value="Eastern">Eastern</option>

                        </select>

                    </div>
                    <div class="mb-3 col-md-12">
                        <label>Local Location</label>
                        <input type="text" name="location" class="form-control rounded-pill" required placeholder="Enter the local location name eg Isinya, Manyani">
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="message">More info:</label>

                        <textarea id="message" name="message" placeholder="say something..." rows="2" cols="25">

                                            </textarea>

                    </div>

                    <div class="mb-3 col-sm-12 mt-5">
                        <input type="reset" name="clear" class= "rounded-pill btn btn-danger col-md-5 p-2 m-1 " value="Clear">
                        <input type="submit" name="submit" class= "rounded-pill btn btn-success float-end col-md-5 m-1 p-2" value="Submit">
                    </div>
                </div>
            </div>

            </form>
            <div class="modal-footer bg-purple">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
    <div  class="row">

        <div </div>
        <div class="col-12 text-yellow ">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header bg-purple">
                        <h5 class="card-title">Client Orders</h5>
                    </div>
                    <div class="card-body bg-purple">

                        <?php

                        include "link.php";


                        $sql = "SELECT * FROM `oders`";

                        $result = mysqli_query($link,$sql);

                        if ($result){

                            $data = mysqli_num_rows($result);

                            if ($data>0){

                                echo "<h2 class='text-center p-4'>Orders</h2>";

                                echo "<table class='table  table-hover bg-success mt-8'>";
                                echo "<tr>";
                                echo "<th>#</th>";
                                echo "<th>Email</th>";
                                echo "<th>Service</th>";
                                echo "<th>Workhours</th>";
                                echo "<th>Gender</th>";
                                echo "<th>Residence</th>";
                                echo "<th>Location</th>";
                                echo "<th>Actions</th>";
                                echo "<th>Charges</th>";



                                echo "</tr>";
                                while ($row=mysqli_fetch_array($result)){
                                    echo "<tr class='text-yellow'>";
                                    echo "<td>".$row['id']."</td>" ;
                                    echo "<td>".$row['email']."</td>" ;
                                    echo "<td>".$row['service']."</td>" ;
                                    echo "<td>".$row['workhours']."</td>" ;
                                    echo "<td>".$row['gender']."</td>" ;
                                    echo "<td>".$row['residence']."</td>" ;
                                    echo "<td>".$row['location']."</td>" ;



                                    echo " <td>

                                      <a class='m-1' href='delete.php?id=".$row['id']."'><span class='fa fa-trash text-yellow'></span></a>
                                      <a class='m-2' href='update.php?id=".$row['id']."'><span class='fa fa-pencil text-yellow'></span></a>
                                     

                                    </td>";
                                    echo "<td>".$row['charges']."</td>" ;


                                    echo "</tr>";

                                }
                                echo "</table>";

                            }else{
                                echo "<p class='alert alert-primary'>Stated Record does not exist in our Database</p>";
                            }
                        }else{
                            echo "Error executing query $sql".mysqli_error($link);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>