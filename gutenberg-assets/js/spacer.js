/* Section block -------------------------------------- */
(function(wp) {
  const el = wp.element.createElement;
  const InnerBlocks = wp.blockEditor.InnerBlocks;
  const registerBlock = wp.blocks.registerBlockType;
  const groupArgs = {
    title: 'Spacer',
    category: 'design',
    icon: 'editor-insertmore',

    edit: function(props) {
      return el(
          'div', 
          {
            className: props.className + ' spacer',
          },
          el ('div', {className: 'spacer-line'})
      );
    },

    save: function(props) {
      return;
    },
    /* end of save() */

  }; /* end of containerArgs obj*/

  registerBlock('oppidan/spacer', groupArgs);
})(window.wp);