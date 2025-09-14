<div>
    <form action="email-templates/contact-form.php" method="post">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="position-relative form-group mb-20px">

                        <span class="form-icon"><i class="bi bi-emoji-smile"></i></span>

                        <input type="text" name="name" class="form-control required"
                            placeholder="Enter your name*" />

                    </div>
                </div>
                <div class="col-md-6">
                    {{-- <div class="position-relative form-group mb-20px">

                        <span class="form-icon"><i class="bi bi-envelope"></i></span>

                        <input type="email" name="email" class="form-control required"
                            placeholder="Enter your email*" />

                    </div> --}}
                    <div class="position-relative form-group mb-20px">

                        <span class="form-icon"><i class="bi bi-telephone-outbound"></i></span>

                        <input type="tel" name="phone" class="form-control" placeholder="Enter your phone" />

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="position-relative form-group mb-20px">

                        <span class="form-icon"><i class="bi bi-telephone-outbound"></i></span>

                        <input type="text" name="city" class="form-control" placeholder="Enter your City" />

                    </div>

                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group mb-20px">

                        <span class="form-icon"><i class="bi bi-telephone-outbound"></i></span>

                        <input type="text" name="state" class="form-control" placeholder="Enter your State" />

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="position-relative form-group mb-20px">

                        <span class="form-icon"><i class="bi bi-telephone-outbound"></i></span>

                        <input type="number" name="loan_amount" class="form-control" placeholder="Enter Loan Amount" />

                    </div>

                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group mb-20px">

                        <span class="form-icon"><i class="bi bi-telephone-outbound"></i></span>

                        <input type="text" name="state" class="form-control" placeholder="Type of business" />

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="position-relative form-group mb-20px">

                        <span class="form-icon"><i class="bi bi-telephone-outbound"></i></span>

                        <select name="loan_amount" id="loan_amount"class="form-control-select">
                            <option value="">Select Loan Category</option>
                            <option value="0">Loan</option>
                            <option value="0">Loan</option>
                            <option value="0">Loan</option>
                        </select>
                        {{-- <input type="number" name="loan_amount" class="form-control" placeholder="Enter Loan Amount" /> --}}

                    </div>

                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group mb-20px">

                        <span class="form-icon"><i class="bi bi-telephone-outbound"></i></span>

                        <select name="loan_amount" id="loan_amount"class="form-control-select">
                            <option value="">Select Collateral Mortgage</option>
                            <option value="0">Loan</option>
                            <option value="0">Loan</option>
                            <option value="0">Loan</option>
                        </select>
                        {{-- <input type="text" name="state" class="form-control" placeholder="Type of business" /> --}}

                    </div>
                </div>
            </div>
        </div>





        <div class="position-relative form-group form-textarea">

            <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>

            <textarea placeholder="Your message" name="comment" class="form-control" rows="3"></textarea>

            <input type="hidden" name="redirect" value="">

            <button class="btn btn-medium btn-base-color btn-box-shadow btn-round-edge w-100 mt-20px submit"
                type="submit">Send
                message</button>

            <div class="form-results mt-20px d-none"></div>

        </div>

    </form>
</div>
