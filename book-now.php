<?php include('assets/includes/header-second.php'); ?>
<section class="section-padding">
    <div class="container">
        <div class="book-now-form">
            <div class="booking-form-heading">
                <h4>Book your trip to dream destination</h4>
                <p>We will contact you soon after verifying the details.</p>
            </div>
            <form action="">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tour-package">Select Tour Package:</label>
                        <select class="form-control" id="tour-package">
                            <option>Manasalu Trek</option>
                            <option>Everest Trek</option>
                            <option>Annapurna trek</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="no-of-persons">No. of Persons:<span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="no-of-persons" placeholder="No. of Persons">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Your Name">
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email:<span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Your Email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="phone">Phone:</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Enter Your Number">
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter Your Address">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="arrival-date">Arrival Date:</label>
                        <input type="date" class="form-control" id="arrival-date">
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="departure-date">Departure Date:</label>
                        <input type="date" class="form-control" id="departure-date" placeholder="Enter Your Address">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="3"></textarea>
                </div>
                <div class="text-center">
                    <a href="#.php" class="red-button hvr-sweep-to-right">Submit</a>
                </div>
            </form>
        </div>
    </div>
</section>
<?php include('assets/includes/footer.php'); ?>