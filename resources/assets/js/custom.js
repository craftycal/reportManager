$( document ).ready(function() {

  // menu slide
  $( ".sideNavButton" ).click(function() {
    $('.sideMenu').toggleClass('widthOff');
    $('.sideNavButton').toggleClass('positionOff');
  });


  // form maker
  var wrapper         = $(".newReportForm");
  var add_heading     = $(".add_heading");
  var add_textarea    = $(".add_textarea");
  var add_image       = $(".add_image");

  $(add_heading).click(function(){
    $(wrapper).append('<div class="wrapper"><div class="mui-textfield mui-textfield--float-label inputIn"><input type="text"><label>Heading</label></div><a href="#" class="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>');
  });

  $(add_textarea).click(function(){
    $(wrapper).append('<div class="wrapper"><div class="editor-container inputIn"></div><a href="#" class="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>');
  });

  $(add_image).click(function(){
    $(wrapper).append('<div class="wrapper"><input class="inputIn" type="file" name="myImage" accept="image/*" /><a href="#" class="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>');
  });

  $(wrapper).on("click",".delete", function(e){
    e.preventDefault(); $(this).parent('div').remove();
  })


// quill

  var toolbarOptions = [
    ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
    ['blockquote', 'code-block'],

    [{ 'header': 1 }, { 'header': 2 }],               // custom button values
    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
    [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
    [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
    [{ 'direction': 'rtl' }],                         // text direction

    [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

    [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
    [{ 'font': [] }],
    [{ 'align': [] }],

    ['clean']                                         // remove formatting button
  ];

  var quill = new Quill('.editor-container', {
    modules: {
      toolbar: toolbarOptions
    },
    theme: 'snow'
  });

  // var form = document.querySelector('form');
  // form.onsubmit = function() {
  //   // Populate hidden form on submit
  //   var about = document.querySelector('input[name=about]');
  //   about.value = JSON.stringify(quill.getContents());
  //
  //   console.log("Submitted", $(form).serialize(), $(form).serializeArray());
  //
  //   // No back end to actually submit to!
  //   alert('Open the console to see the submit data!')
  //   return false;
  // };

});
