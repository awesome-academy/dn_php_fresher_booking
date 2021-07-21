<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="modalBookings" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            {{trans('messages.admin_all_bookings_page.detail') }}
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form">
                                    <div class="form-group">
                                        <label
                                            for="exampleInputEmail1">{{trans('messages.admin_all_bookings_page.name') }}</label>
                                        <select class="form-control m-bot15" id="customerName">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label
                                            for="exampleInputPassword1">{{trans('messages.admin_all_bookings_page.tour') }}</label>
                                        <select class="form-control m-bot15" id="tourName">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label
                                            for="exampleInputPassword1">{{trans('messages.admin_all_bookings_page.date') }}</label>
                                        <input type="text" class="form-control" id="datepicker">
                                    </div>
                                    <div class="form-group">
                                        <label
                                            for="exampleInputPassword1">{{trans('messages.admin_all_bookings_page.status') }}</label>

                                    </div>
                                    <div id="paypal-button-container"></div>
                                    <button type="submit"
                                        class="btn btn-info text-center">{{trans('messages.modal.save') }}</button>
                                </form>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

</div>
