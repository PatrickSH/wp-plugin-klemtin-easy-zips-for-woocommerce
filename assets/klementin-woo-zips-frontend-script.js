jQuery(document).ready(function ($) {

    function klementin_woo_zips_do_search() {
        http_post('klementin_woo_zips_zip_to_city',{country : $('select[name="billing_country"]').val(),zip: $('input[name="billing_postcode"]').val()}).done(function (res) {

            if (res != 0) {
                $('input[name="billing_city"]').val(res);
            }

        })
    }

    $(document).on('keyup','input[name="billing_postcode"]',klementin_wp_debounce(function () { klementin_woo_zips_do_search() },300));
    $('select[name="billing_country"]').on('change',klementin_wp_debounce(function () { klementin_woo_zips_do_search() },300));

})