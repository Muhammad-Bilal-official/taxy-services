<section id="booking-form-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-5">Booking Form</h1>
                <div class="container">
                    <form class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Yout Name*</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Your Phone*</label>
                                <input type="phone" class="form-control" id="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="start-point">Start Point*</label>
                                <input type="text" class="form-control" id="start-point" placeholder="Where would you like to be picked up from?" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Your Email Address*</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="passenger">Passenger*</label>
                                <select class="form-control" id="passenger" required>
                                    <option value="select">Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="destination">Destination</label>
                                <input type="text" class="form-control" id="destination" placeholder="Where would you like to go?">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group w-100">
                                <label for="message">Your Message</label>
                                <textarea class="form-control" id="message" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>