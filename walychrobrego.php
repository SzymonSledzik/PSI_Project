<section class="container-fluid text-center">
    <section class="row content">
        <section class="col-sm-2 sidenav">
            <p><a href="#">Link</a></p>
            <p><a href="#">Link</a></p>
            <p><a href="#">Link</a></p>
        </section>
        <section class="col-sm-8 text-left">
            <?php
            showMonument($_GET['page']);

            ?>
        </section>
    </section>
</section>
<section class="container">
    <section class=" text-center mt-5 ">
        <h1>Formularz kontaktowy</h1>
    </section>
    <section class="row ">
        <section class="col-lg-7 mx-auto">
            <section class="card mt-2 mx-auto p-4 bg-light">
                <section class="card-body bg-light">
                    <section class="container">
                        <form action="index.php?page=bramaportowa" method="POST" id="contact-form" role="form">
                            <section class="controls">
                                <section class="row">
                                    <section class="col-md-6">
                                        <section class="form-group">
                                            <label for="form_name">Imie</label>
                                            <input id="form_name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="Firstname is required.">
                                        </section>
                                    </section>
                                    <section class="col-md-6">
                                        <section class="form-group">
                                            <label for="form_lastname">Nazwisko</label>
                                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="" required="required" data-error="Lastname is required.">
                                        </section>
                                    </section>
                                </section>
                                <section class="row">
                                    <section class="col-md-12">
                                        <section class="form-group">
                                            <label for="form_message">Wiadomość</label>
                                            <textarea id="form_message" name="message" class="form-control" placeholder="" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                        </section>
                                    </section>
                                    <section class="col-md-12" style="margin-bottom: 20px;">
                                        <input type="submit" class="btn btn-success btn-send  pt-2 btn-block
                            " value="Wyślij komentarz" name="button">
                                    </section>
                                </section>
                            </section>
                        </form>
                    </section>
                </section>
            </section>
        </section>
    </section>
</section>
<?php
if (isset($_POST['button'])) {
    addComment($_POST['name'], $_POST['surname'], $_POST['message'], $strona);
}
showComment($strona);


?>