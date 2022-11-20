<div class="container">
    <div class=" text-center mt-5 ">

        <h1>Formularz kontaktowy</h1>


    </div>


    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">

                    <div class="container">
                        <form id="contact-form" role="form">



                            <div class="controls">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Imie</label>
                                            <input id="form_name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="Firstname is required.">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_lastname">Nazwisko</label>
                                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="" required="required" data-error="Lastname is required.">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_message">Wiadomość</label>
                                            <textarea id="form_message" name="message" class="form-control" placeholder="" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                        </div>

                                    </div>


                                    <div class="col-md-12" style="margin-bottom: 20px;">

                                        <input type="submit" class="btn btn-success btn-send  pt-2 btn-block
                            " value="Wyślij wiadomość">

                                    </div>

                                </div>


                            </div>
                        </form>
                    </div>
                </div>


            </div>
            <!-- /.8 -->

        </div>
        <!-- /.row-->

    </div>
</div>