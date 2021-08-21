let editor;
require.config({
    paths: {
        'vs': '../monaco-editor/min/vs'
    }
});
require(['vs/editor/editor.main'], function () {
    editor = monaco.editor.create(document.getElementById('container'), {
        value: [atob(code)].join('\n'),
        language: 'php',
        theme: "vs-dark",
        readOnly: true
    });
});
