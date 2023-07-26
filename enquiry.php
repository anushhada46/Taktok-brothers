<?php include('assets/includes/header-second.php'); ?>
<section class="enquiry-page-section">
    <div class="container">
        <div class="main-title ">
            <h6>KNOW MORE ABOUT SERVICES/PRODUCTS</h6>
            <h2>ENQUIRE NOW</h2>
        </div>
        <form action="">
            <div class="form-group">
                <label for="fname">Enter Full Name</label>
                <input type="text" class="form-control" id="fname" aria-describedby="fullname"
                    placeholder="Enter Full Name">
            </div>
            <div class="form-group">
                <label for="email">Enter Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="enteremail"
                    placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label for="phone">Enter Phone Number</label>
                <input type="tel" class="form-control" id="phone" aria-describedby="enterphone"
                    placeholder="Enter Phone Number">
            </div>
            <div class="form-group">
                <label for="serviceselect">Service/Product</label>
                <select id="serviceselect" class="form-control" name="serviceselect">
                    <option selected>Web Development</option>
                    <option>Digital Marketing</option>
                    <option>SEO Optimization</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Enter Your Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </form>
    </div>
</section>
<?php include('assets/includes/footer.php'); ?>