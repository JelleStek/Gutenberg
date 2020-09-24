
var el = wp.element.createElement;
registerBlockType = wp.blocks.registerBlockType,


registerBlockType('css-block/css-block-step-02', {
title: 'Extrernal CSS Block',
description: 'Load external css files',
icon: 'universal-access-alt',
category: 'layout',
    
    edit: function() {
        return el('p', {className: 'box-edit'}, 'Hello Editor!')
    },

    save: function() {
        return el('p', {className: 'box-front'}, 'Hello world front-end!!')
    },
});