<div class="card-body three-text-color">

    <h3>Registration:</h3>
    <h5>Early Bird Registration: Now until 15 Jun 2024</h5>
    <h5>Regular Registration: 16 Jun - 1 Sep 2024</h5>
</div>

<div class="card shadow p-2">
    <div class="card-body">
        <form class="row g-2 was-validated" id="formThree">
            <div class="col-lg-2">
                <label for="select_prefix" class="form-label"><i class="fa-solid fa-filter"></i> Prefix</label>
                <select class="form-select" id="select_prefix" required>
                    <option selected disabled value="">Select...</option>
                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Miss">Miss</option>
                    <option value="Dr.">Dr.</option>
                    <option value="Prof.">Prof.</option>
                </select>
                <div class="invalid-feedback">Please select your prefix</div>
            </div>
            <div class="col-lg-5">
                <label for="txt_first_name" class="form-label"><i class="fa-solid fa-font"></i> First name</label>
                <input type="text" class="form-control" id="txt_first_name" oninput="this.value = this.value.replace(/[^a-zA-Z.]/g, '')" required>
                <div class="invalid-feedback">Please enter your first name</div>
            </div>
            <div class="col-lg-5">
                <label for="txt_last_name" class="form-label"><i class="fa-solid fa-font"></i> Last name</label>
                <input type="text" class="form-control" id="txt_last_name" oninput="this.value = this.value.replace(/[^a-zA-Z.]/g, '')" required >
                <div class="invalid-feedback">Please enter your last name</div>
            </div>
            <div class="col-lg-3">
                <label for="txt_organization" class="form-label"><i class="fa-solid fa-font"></i> ORGANIZATION</label>
                <input type="text" class="form-control" id="txt_organization" required>
                <div class="invalid-feedback">Please enter your an organization</div>
            </div>
            <div class="col-lg-3">
                <label for="txt_email" class="form-label"><i class="fa-regular fa-envelope"></i> Email</label>
                <input type="text" class="form-control" id="txt_email" required>
                <div class="invalid-feedback">Please enter your email</div>
            </div>
            <div class="col-lg-4">
                <label for="select_member" class="form-label"><i class="fa-brands fa-ember"></i> select status</label>
                <select class="form-select" id="select_member" onchange="checkRegisterStep3(value)" required>
                    <option selected disabled value="">Select...</option>
                    <option value="isahmember">ISAH MEMBER</option>
                    <option value="nonisahmember">NON-ISAH MEMBER</option>
                    <option value="student">STUDENT</option>
                    <option value="lowincome">LOW-INCOME COUNTRY AND THAILAND</option>
                </select>
                <div class="invalid-feedback">Please select your status</div>
            </div>

            <div class="col-lg-2">
                <label for="txt_fee" class="form-label"><i class="fa-solid fa-dollar-sign"></i> fee</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="txt_fee" placeholder="FEE" required disabled readonly>
                    <span class="input-group-text">USD</span>
                </div>
            </div>
            <div class="row g-2" id="id_check_select"></div>
            <div class="row g-2" id="id_package_select"></div>
            <div class="row g-2" id="id_nextStep3">
                <div class="col-lg-6 order-2">
                    <button class="btn btn-danger" style="width: 100%;" type="reset" onclick="cancel_register('box3')">Cancel</button>
                </div>
                <div class="col-lg-6 order-1 ">
                    <button type="button" class="btn btn-primary none-disabled " style="width: 100%;" onclick="nextStep('step-3')">Next</button>
                </div>
            </div>
        </form>

    </div>
</div>