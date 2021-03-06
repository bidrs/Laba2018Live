/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */



CKEDITOR.editorConfig = function( config ) {
  config.toolbarGroups = [
    { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
    { name: 'styles', groups: [ 'styles' ] },
    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
    { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
    { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
    { name: 'links', groups: [ 'links' ] },
    { name: 'insert', groups: [ 'insert' ] },
    { name: 'forms', groups: [ 'forms' ] },
    { name: 'tools', groups: [ 'tools' ] },
    { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
    { name: 'others', groups: [ 'others' ] },
    '/',
    { name: 'colors', groups: [ 'colors' ] },
    '/',
    { name: 'about', groups: [ 'about' ] }
  ];

  config.removeButtons = 'Underline,Cut,Copy,Paste,PasteText,PasteFromWord,Maximize,About,Subscript,Superscript,Anchor,HorizontalRule,SpecialChar,Styles,Scayt,Blockquote,Image,Format';


};