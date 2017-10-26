<!-- Include stylesheet -->
<link href="https://cdn.quilljs.com/1.3.3/quill.snow.css" rel="stylesheet">
<!-- Create the editor container -->
<div id="toolbar-container">
  <span class="ql-formats">
    <select class="ql-size">
      <option value="10px">Small</option>
      <option selected>Normal</option>
      <option value="18px">Large</option>
      <option value="32px">Huge</option>
    </select>
    <select class="ql-font">
      <option selected=""></option>
      <option value="serif"></option>
      <option value="monospace"></option>
    </select>
  </span>

    <span class="ql-formats">
    <button class="ql-bold"></button>
    <button class="ql-italic"></button>
    <button class="ql-underline"></button>
    <button class="ql-list"><span style="color: #333;"><i class="fa fa-list-ul" aria-hidden="true"></i></span></button>
    <button class="ql-list" value="ordered" type="button"><span style="color: #333;"><i class="fa fa-list-ol" aria-hidden="true"></i></span></button>
  </span>
  <span class="ql-formats">
    <select class="ql-color">
      <option selected></option>
      <option value="red"></option>
      <option value="orange"></option>
      <option value="yellow"></option>
      <option value="green"></option>
      <option value="blue"></option>
      <option value="purple"></option>
    </select>
    <select class="ql-background">
      <option selected></option>
      <option value="red"></option>
      <option value="orange"></option>
      <option value="yellow"></option>
      <option value="green"></option>
      <option value="blue"></option>
      <option value="purple"></option>
    </select>
    <span class="ql-formats">
    <select class="ql-align">
      <option selected></option>
      <option value="center"></option>
      <option value="right"></option>
      <option value="justify"></option>
    </select>
  </span>
    <span class="ql-formats">
      <button class="ql-image"></button>
  </span>
  </span>
</div>
<div id="editor-container"></div>
<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.3/quill.js"></script>
<!-- Initialize Quill editor -->
<script>
var BackgroundClass = Quill.import('attributors/class/background');
var ColorClass = Quill.import('attributors/class/color');
var SizeStyle = Quill.import('attributors/style/size');
Quill.register(BackgroundClass, true);
Quill.register(ColorClass, true);
Quill.register(SizeStyle, true);
var quill = new Quill('#editor-container', {
  modules: {
    toolbar: '#toolbar-container'
  },
  placeholder: 'Text area...',
  theme: 'snow'
});
</script>