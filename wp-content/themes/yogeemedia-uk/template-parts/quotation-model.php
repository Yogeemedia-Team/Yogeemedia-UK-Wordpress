  <!-- Quotation popup -->
  <div class="modal fade quotation-model" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog h-100 my-0">
            <div class="modal-content bg-dark bg-opacity-50 p-4">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Request Quotation</h5>
                    <button type="button" class="btn-close bg-light" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">
                    <p>Please provide below details</p>
                <?php echo apply_shortcodes( '[contact-form-7 id="17a45ff" title="Request Quotation"]' ); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Quotation popup -->