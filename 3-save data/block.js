
var el = wp.element.createElement;
registerBlockType = wp.blocks.registerBlockType,
blockStyle = {backgroundColor: '#900', color: '#fff', padding: '20px'};

registerBlockType('gutenberg-boilerplate-es5/hello-world-step-01', {
title: 'Hello world',
icon: 'universal-access-alt',
category: 'layout',
    
    edit: function() {
        return el('p', {style: blockStyle}, 'Hello Editor!')
    },

    save: function() {
        return el('p', {style: blockStyle}, 'Hello world front-end!!')
    },
});