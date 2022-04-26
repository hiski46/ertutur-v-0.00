<form id="ertutur">
    <div class="row justify-content-around">
        <div id="kai" class="col-5 border p-2 m-1">
            <div class="row">
                <div id="enda" class="col-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis-kelamin-1" id="jenis-kelamin1" value="0" checked>
                        <label class="form-check-label" for="jenis-kelamin1">
                            Dilaki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis-kelamin-1" id="jenis-kelamin2" value="1">
                        <label class="form-check-label" for="jenis-kelamin2">
                            Diberu
                        </label>
                    </div>
                </div>
            </div>
            <div id="logo" class="">
                <div class="fa-10x icon">
                    <i id="logo-1" class="fa-solid fa-person "></i>
                </div>
            </div>
            <div id="enda1" class="row">
                <div class="col-12 col-md-3">
                    <label id="label-merga-1" for="select-merga-1">Merga :</label>
                </div>
                <div class="col-12 col-md-5">
                    <select id="select-merga-1" name="sub-merga-1" class="form-select" aria-label="Default select example">
                        <option value='0' selected>Pilih Sub Merga</option>
                        <?php foreach ($limaMerga as $lm) { ?>
                            <option value="<?= $lm['id_merga']; ?>"><?= $lm['merga']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-12 col-md-4">
                    <select id="all-merga-1" name="merga-1" class="form-select" aria-label="Default select example">
                        <option value='0' selected>Pilih Merga</option>
                    </select>
                </div>
            </div>
            <div id='enda2' class="row">
                <div class="col-12 col-md-3">
                    <label id="label-bere-1" for="select-bere-1">Bere-bere :</label>
                </div>
                <div class="col-12 col-md-5">
                    <select id="select-bere-1" name="sub-bere-1" class="form-select" aria-label="Default select example">
                        <option value='0' selected>Pilih Sub Merga</option>
                        <?php foreach ($limaMerga as $lm) { ?>
                            <option value="<?= $lm['id_merga']; ?>"><?= $lm['merga']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-12 col-md-4">
                    <select id="all-bere-1" name="bere-1" class="form-select" aria-label="Default select example">
                        <option value='0' selected>Pilih Merga</option>
                    </select>
                </div>
            </div>

        </div>
        <div id="data" class="col-6 position-relative " style="display:none"></div>
        <div id="kai" class="col-5 border p-2 m-1">
            <div class="row ">
                <div id='enda4' class="col-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis-kelamin-2" id="jenis-kelamin12" value="0">
                        <label class="form-check-label" for="jenis-kelamin12">
                            Dilaki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis-kelamin-2" id="jenis-kelamin22" value="1" checked>
                        <label class="form-check-label" for="jenis-kelamin22">
                            Diberu
                        </label>
                    </div>
                </div>
            </div>
            <div id="logo" class="col-8 align-self-end">
                <div class="fa-10x icon kanan">
                    <i id="logo-2" class="fa-solid fa-person-dress  "></i>
                </div>
            </div>

            <div id='enda5' class="row">
                <div class="col-12 col-md-3">
                    <label id="label-merga-2" for="select-merga-2">Beru :</label>
                </div>
                <div class="col col-md-5">
                    <select id="select-merga-2" class="form-select" name="sub-merga-1" aria-label="Default select example">
                        <option value='0' selected>Pilih Sub Merga</option>
                        <?php foreach ($limaMerga as $lm) { ?>
                            <option value="<?= $lm['id_merga']; ?>"><?= $lm['merga']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col col-md-4">
                    <select id="all-merga-2" class="form-select" name="merga-2" aria-label="Default select example">
                        <option value='0' selected>Pilih Merga</option>
                    </select>
                </div>
            </div>
            <div id='enda6' class="row">
                <div class="col-12 col-md-3">
                    <label id="label-bere-2" for="select-bere-2">Bere-bere :</label>
                </div>
                <div class="col-12 col-md-5">
                    <select id="select-bere-2" class="form-select" name="sub-bere-2" aria-label="Default select example">
                        <option value='0' selected>Pilih Sub Merga</option>
                        <?php foreach ($limaMerga as $lm) { ?>
                            <option value="<?= $lm['id_merga']; ?>"><?= $lm['merga']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-12 col-md-4">
                    <select id="all-bere-2" class="form-select" name="bere-2" aria-label="Default select example">
                        <option value='0' selected>Pilih Merga</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div id='enda7' class="row">
        <div class="col text-center">
            <input class="btn btn-primary" value="Cuba" type="submit">
        </div>
    </div>
</form>


<script>
    $(document).ready(function() {
        // let selek = $('#select-merga-1').val()
        $('#select-merga-1').click(function() {
            let id = $(this).val()
            $.ajax({
                url: base_url + '/Main/all_merga/' + id,
                type: 'POST',
                success: function(data) {
                    let merga = JSON.parse(data)
                    html = ''
                    merga.forEach(m => {
                        html += `<option value="` + m['id_all_merga'] + `">` + m['all_merga'] + `</option>`
                    });
                    $('#all-merga-1').html(html)
                }
            })
        })
        $('#select-bere-1').click(function() {
            let id = $(this).val()
            $.ajax({
                url: base_url + '/Main/all_merga/' + id,
                type: 'POST',
                success: function(data) {
                    let merga = JSON.parse(data)
                    html = ''
                    merga.forEach(m => {
                        html += `<option value="` + m['id_all_merga'] + `">` + m['all_merga'] + `</option>`
                    });
                    $('#all-bere-1').html(html)
                }
            })
        })
        $('#select-merga-2').click(function() {
            let id = $(this).val()
            $.ajax({
                url: base_url + '/Main/all_merga/' + id,
                type: 'POST',
                success: function(data) {
                    let merga = JSON.parse(data)
                    html = ''
                    merga.forEach(m => {
                        html += `<option value="` + m['id_all_merga'] + `">` + m['all_merga'] + `</option>`
                    });
                    $('#all-merga-2').html(html)
                }
            })
        })
        $('#select-bere-2').click(function() {
            let id = $(this).val()
            $.ajax({
                url: base_url + '/Main/all_merga/' + id,
                type: 'POST',
                success: function(data) {
                    let merga = JSON.parse(data)
                    html = ''
                    merga.forEach(m => {
                        html += `<option value="` + m['id_all_merga'] + `">` + m['all_merga'] + `</option>`
                    });
                    $('#all-bere-2').html(html)
                }
            })
        })
        $('input[name="jenis-kelamin-1"]').click(function() {

            let jk = $('input[name="jenis-kelamin-1"]:checked').val()
            if (jk === '0') {
                $('#logo-1').removeClass().addClass('fa-solid fa-person ');
                $('#label-merga-1').html('Merga :')
            } else {
                $('#logo-1').removeClass().addClass('fa-solid fa-person-dress ');
                $('#label-merga-1').html('Beru :')
            }
            // if()
            // $('#logo-1').removeClass().addClass('fa-solid fa-person ')
        })
        $('input[name="jenis-kelamin-2"]').click(function() {

            let jk = $('input[name="jenis-kelamin-2"]:checked').val()
            if (jk === '0') {
                $('#logo-2').removeClass().addClass('fa-solid fa-person ');
                $('#label-merga-2').html('Merga :')
            } else {
                $('#logo-2').removeClass().addClass('fa-solid fa-person-dress ');
                $('#label-merga-2').html('Beru :')
            }
            // if()
            // $('#logo-1').removeClass().addClass('fa-solid fa-person fa-beat')
        })

        $('#ertutur').submit(function(e) {
            e.preventDefault();
            var values = $(this).serializeArray()
            // values.forEach(element => {
            //     console.log(element['name'] + element['value'])
            // });
            // $('#data').html(values)
            // console.log(values)
            $.ajax({
                url: base_url + '/Main/tampilHasil',
                type: 'POST',
                data: {
                    values: values
                },
                success: function(data) {
                    $('div[id*="enda"]').hide()
                    $('div[class*="kanan"').addClass('text-end')
                    $('div[class*="border"').removeClass('border')
                    $('div[id*="kai"').removeClass('col-5').addClass('col-2')
                    $('#data').html('<h1 class="position-absolute top-50 start-50 translate-middle fw-bold">' + data + '</h1>')
                    $('#data').show(2000);
                    $('#ertutur').click(function() {
                        back()
                    })
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status);
                    alert(thrownError);
                }
            })

        })

    })
</script>