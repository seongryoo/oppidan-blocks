/* Section block -------------------------------------- */
(function(wp) {
  console.log(wp)
  const el = wp.element.createElement;
  const InnerBlocks = wp.blockEditor.InnerBlocks;
  const registerBlock = wp.blocks.registerBlockType;
  const groupArgs = {
    title: 'Logo Gallery',
    category: 'media',
    icon: 'format-gallery',

    edit: function(props) {
      return el(
          'div', {
            className: props.className + ' logo-gallery',
          },
          el(InnerBlocks, {
            renderAppender: () => el(InnerBlocks.ButtonBlockAppender),
            allowedBlocks: ['core/image'],
          })
      );
    },

    save: function(props) {
      return el(InnerBlocks.Content);
    },
    /* end of save() */

  }; /* end of containerArgs obj*/

  registerBlock('oppidan/logo-gallery', groupArgs);
})(window.wp);