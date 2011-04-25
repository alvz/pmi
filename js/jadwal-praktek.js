$(function() {
    $('#cari-mr-button').click(function() {
        searchProviderJadwalPraktek();
    });

    $('#cari-mr-text').keypress(function(event){
        if (event.keyCode == '13') {
            event.preventDefault();
            searchProviderJadwalPraktek();
        }
    });

    validateForm();
});

function validateForm()
{
    var digitsMsg = 'Tidak boleh mengandung huruf';
    var emptyMsg = 'Isian tidak boleh kosong';
    
     $('#jadwal-praktek').validate({
        rules: {
            'JadwalPraktek[nama_dokter]': {
                required: true
            },
            'senin1[]': {
                digits: true
            },
            'senin2[]': {
                digits: true
            },
            'selasa1[]': {
                digits: true
            },
            'selasa2[]': {
                digits: true
            },
            'rabu1[]': {
                digits: true
            },
            'rabu2[]': {
                digits: true
            },
            'kamis1[]': {
                digits: true
            },
            'kamis2[]': {
                digits: true
            },
            'jumat1[]': {
                digits: true
            },
            'jumat2[]': {
                digits: true
            },
            'sabtu1[]': {
                digits: true
            },
            'sabtu2[]': {
                digits: true
            },
            'minggu1[]': {
                digits: true
            },
            'minggu2[]': {
                digits: true
            }
        },
        messages: {
            'JadwalPraktek[nama_dokter]': {
                required: emptyMsg
            },
            'senin1[]': {
                digits: digitsMsg
            },
            'senin2[]': {
                digits: digitsMsg
            },
            'selasa1[]': {
                digits: digitsMsg
            },
            'selasa2[]': {
                digits: digitsMsg
            },
            'rabu1[]': {
                digits: digitsMsg
            },
            'rabu2[]': {
                digits: digitsMsg
            },
            'kamis1[]': {
                digits: digitsMsg
            },
            'kamis2[]': {
                digits: digitsMsg
            },
            'jumat1[]': {
                digits: digitsMsg
            },
            'jumat2[]': {
                digits: digitsMsg
            },
            'sabtu1[]': {
                digits: digitsMsg
            },
            'sabtu2[]': {
                digits: digitsMsg
            },
            'minggu1[]': {
                digits: digitsMsg
            },
            'minggu2[]': {
                digits: digitsMsg
            }
        }
    });
}

function searchProviderJadwalPraktek()
{
    $('#boxLoading').toggleClass('hide');
    var searchText = $('#cari-mr-text').val();

    $.ajax({
       type: "POST",
       url: baseUrl + '/rs/datregister/searchmr',
       data: {search: searchText, tipe: 1},
       success: function(data){
           //console.log(data);
            $('#Datregister_idmr').html(data);
            $('#boxLoading').toggleClass('hide');
       }
    });
}