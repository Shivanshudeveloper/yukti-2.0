<?php include './header.php' ?>
    <!--Main layout-->
    <form action="../../src/php/main.php" method="POST">
    <main class="mt-4 mb-5 container">
        <h2 class="display-4 font-weight-bold">
            INNOVATION DISCLOSURE FORM
        </h2>
        <div class="row mt-4">
            <div class="col col-lg-3">
                <h5>Sector</h5>
            </div>
            <div class="col">
                <select class="form-select" id="sector" name="sector" aria-label="Default select example">
                    <option selected>-- SELECT YOUR OPTIONS --</option>
                    <option value="Aerospace, Aviation, Space">Aerospace, Aviation, Space</option>
                    <option value="Agriculture and Allied Industries">Agriculture and Allied Industries</option>
                    <option value="Chemicals">Chemicals</option>
                    <option value="Clean Tech">Clean Tech</option>
                    <option value="Consumer Goods and Retail">Consumer Goods and Retail</option>
                    <option value="Conventional Energy">Conventional Energy</option>
                    <option value="Defence & Security">Defence & Security</option>
                    <option value="Education">Education</option>
                    <option value="Electronics and IoT">Electronics and IoT</option>
                    <option value="Fashion and Textiles">Fashion and Textiles</option>
                    <option value="Healthcare and Pharma">Healthcare and Pharma</option>
                    <option value="Information and Communication Technologies">Information and Communication Technologies</option>
                    <option value="Infrastructure">Infrastructure</option>
                    <option value="Manufacturing">Manufacturing</option>
                    <option value="Mining, Metals, Materials">Mining, Metals, Materials</option>
                    <option value="Mobility">Mobility</option>
                    <option value="Sports">Sports</option>
                    <option value="Technologies for Grassroots impact">Technologies for Grassroots impact</option>
                    <option value="Tourism and Hospitality">Tourism and Hospitality</option>
                    <option value="Water, Sanitation and Waste Management">Water, Sanitation and Waste Management</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col col-lg-3">
                <h5>Stage of Technology Note</h5>
            </div>
            <div class="col">
                <div class="alert alert-info" role="alert">
                    <h4 class="alert-heading">What is TR</h4>
                    <p>
                    TRL 0: Idea. Unproven concept, no testing has been performed
                    <br />
                    TRL 1: Basic research. Principles postulated and observed but no experimental proof available
                    <br />
                    TRL 2: Technology formulation. Concept and application have been formulated
                    <br />
                    TRL 3: Applied research. First laboratory test completed; proof of concept
                    <br />
                    TRL 4: Small scale prototype built in a laboratory environment
                    <br />
                    TRL 5: Large scale prototype tested in intended environment
                    <br />
                    TRL 6: Prototype system tested in intended environment close to expected performance
                    <br />
                    TRL 7: Demonstration system operating in operational environment at pre-commercial scale
                    <br />
                    TRL 8: First of a kind commercial system. Manufacturing issues resolved
                    <br />
                    TRL 9: Full commercial application, technology available for consumers
                    </p>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col col-lg-3">
                <h5>Stage of Technology</h5>
            </div>
            <div class="col">
                <select class="form-select" id="stage" name="stage" aria-label="Default select example">
                    <option selected>-- SELECT YOUR OPTIONS --</option>
                    <option value="TRL 0-2">TRL 0-2</option>
                    <option value="TRL 3">TRL 3</option>
                    <option value="TRL 4-5">TRL 4-5</option>
                    <option value="TRL 6-9">TRL 6-9</option>
                </select>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col col-lg-3">
                <h5>Support required</h5>
            </div>
            <div class="col">
                <select class="form-select" id="support" name="support" aria-label="Default select example">
                    <option selected>-- SELECT YOUR OPTIONS --</option>
                    <option value="Funding">Funding</option>
                    <option value="Mentorship">Mentorship</option>
                </select>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col col-lg-3">

            </div>
            <div class="col">
                <button type="submit" name="d1SubmitBtn" class="btn btn-block btn-lg btn-success">
                    Next
                </button>
            </div>
        </div>
    </main>
    </form>
    <!--Main layout-->
<?php include './footer.php' ?>