<?php include "basic.php"; ?>
<main>
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-md-12">
                <form action="sql/query.php" method="post" class="form-field">
                    <div class="full-name">
                        <label for="fullName">Your Full Name With Middle Name<sup>*</sup></label>
                        <input type="text" autofocus name="fullName" id="fullName" placeholder="Type Full Name here..."
                            required>
                        <div class="text-center"><button type="button" onclick="nameNext();"
                                class="btn btn-primary nameNext">Next</button></div>
                    </div>
                    <div class="phone-num">
                        <label for="phoneNum">Phone Number associated with your bank account?<sup>*</sup></label>
                        <input type="text" name="phoneNum" id="phoneNum" placeholder="Type Phone Number here..."
                            required>
                        <div class="text-center"><button type="button" onclick="phoneNext();"
                                class="btn btn-primary">Next</button></div>
                    </div>
                    <div class="email-id">
                        <label for="emailId">Email Address associated with your bank account?<sup>*</sup></label>
                        <input type="text" name="emailId" id="emailId" placeholder="Type Email Address here..."
                            required>
                        <div class="text-center"><button type="button" onclick="emailNext();"
                                class="btn btn-primary">Next</button></div>
                    </div>
                    <div class="zip-code">
                        <label for="zipCode">Billing Zip code associated with your bank account?<sup>*</sup></label>
                        <input type="text" name="zipCode" id="zipCode" placeholder="Type Zip Code here..." required>
                        <div class="text-center"><button type="button" onclick="zipNext();"
                                class="btn btn-primary">Next</button></div>
                    </div>
                    <div class="bank-name">
                        <label for="bankName">Enter the name of your bank<sup>*</sup></label>
                        <input type="text" name="bankName" id="bankName" placeholder="Type Bank Name here..." required>
                        <div class="text-center"><button type="button" onclick="bankNext();"
                                class="btn btn-primary">Next</button></div>
                    </div>
                    <div class="acc-num">
                        <label for="accNum">Please enter the last 4 digit of your bank account<sup>*</sup></label>
                        <input type="text" maxlength="4" name="accNum" id="accNum"
                            placeholder="Type Last 4-digit of Account Number here..." required>
                        <div class="text-center"><button type="submit" onclick="return accAndValid();"
                                class="btn btn-success">Submit</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>