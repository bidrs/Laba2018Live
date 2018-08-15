$(document).ready(function() {
    "use strict";

    //LEFT MOBILE MENU OPEN
    $(".atab-menu").on('click', function() {
        $(".sb2-1").css("left", "0");
        $(".btn-close-menu").css("display", "inline-block");
    });

    //LEFT MOBILE MENU CLOSE
    $(".btn-close-menu").on('click', function() {
        $(".sb2-1").css("left", "-350px");
        $(".btn-close-menu").css("display", "none");
    });

    //MATERIAL SELECT BOX
    $('select').material_select();

    //MATERIAL COLLAPSIBLE
    $('.collapsible').collapsible();

    //MATERIAL CHIP COMMON
    $('.chips').material_chip();
    $('.chips-initial').material_chip({
        data: [{
            tag: 'Apple',
        }, {
            tag: 'Microsoft',
        }, {
            tag: 'Google',
        }],
    });

    //MATERIAL CHIP PLACEHOLDER
    $('.chips-placeholder').material_chip({
        placeholder: 'Enter a tag',
        secondaryPlaceholder: '+Amini (press enter)',
    });

    //MATERIAL CHIP AUTO-COMPLETE
    $('.chips-autocomplete').material_chip({
        autocompleteOptions: {
            data: {
                'Apple': null,
                'Microsoft': null,
                'Google': null
            },
            limit: Infinity,
            minLength: 1
        }
    });


    // COPYING TEXT
    // $('#c_title').keyup(function(e) {
    //     var txtVal = $(this).val();
    //     $('#abbre').val(txtVal);
    // });


    // SUMMERNOTE EDITOR
    $('.materialnote1').materialnote({
        toolbar: [
              ['style', ['bold', 'italic', 'underline', 'clear']],
              ['font', ['strikethrough']],
              ['para', ['ul', 'ol']],
              ['view', ['codeview']],
            ],
    });

    $('#materialnote2').materialnote({
        height: 250,
        toolbar: [
              ['style', ['bold', 'italic', 'underline', 'clear']],
              ['font', ['strikethrough']],
              ['para', ['ul', 'ol']],
              ['view', ['codeview']],
            ],
    });

    $('.materialnote').materialnote({
        height: 100,
        toolbar: [
              ['style', ['bold', 'italic', 'underline', 'clear']],
              ['font', ['strikethrough']],
              ['para', ['ul', 'ol']],
              ['view', ['codeview']],
            ],
    });



    // ADD ROW DYNAMICALLY
    var rr = 1;
    $('#addBtn').click(function() {
        rr++;
        $('#row_d').append('<div id="row_dd'+rr+'"><div class="input-field col s3 block-border"><input id="list" type="text" class="validate" name="list[]" maxlength="100"><label>Module / Chapter / Title</label><br><div><label class="pos_top">List / Content</label><textarea class="ck" name="sub_list[]"></textarea></div class="row_btn"><br><div><button type="button" id="'+rr+'" class="row_btn_circle btn-remove" value="Remove" title="remove"><i class="fa fa-close"></i></button></div></div></div>');    
        $('.ck').trumbowyg({
            btnsDef: {
                // Create a new dropdown
                image: {
                    dropdown: ['insertImage', 'base64'],
                    ico: 'insertImage'
                }
            },
            // Redefine the button pane
            btns: [
                ['viewHTML'],
                ['strong', 'em', 'del'],
                ['superscript', 'subscript'],
                ['link'],
                // ['image'], // Our fresh created dropdown
                ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                ['unorderedList', 'orderedList'],
                // ['horizontalRule'],
                ['removeformat'],
                // ['fullscreen']
            ]
        });
        $('#tab1').css('display', 'none');
        $('#tab2').css('display', 'block');
    });

    $(document).on('click', '.btn-remove', function() {
        var button_id = $(this).attr("id");
        $("#row_dd"+button_id+"").remove();
        $('#tab1').css('display', 'none');
        $('#tab2').css('display', 'block');
    });


});