// Generated by CoffeeScript 1.4.0

/*

LEGAL COPYRIGHT NOTICE

Copyright (c) Noble Samurai Pty Ltd, 2008-2013. All Rights Reserved.

This software is proprietary to and embodies the confidential technology of Noble Samurai Pty Ltd.
Possession, use, dissemination or copying of this software and media is authorised only pursuant
to a valid written license from Noble Samurai Pty Ltd. Questions or requests regarding permission may
be sent by email to legal@noblesamurai.com or by post to PO Box 477, Blackburn Victoria 3130, Australia.
*/


(function() {

  jQuery(function($) {
    return $.fn.accordion = function(options, data) {
      var $content, $header;
      if (options == null) {
        options = {};
      }
      if (data == null) {
        data = null;
      }
      switch (options) {
        case 'open':
          $header = $('.header', this).removeClass('opened');
          $content = $('.content', this).hide();
          if (data.index !== null) {
            $header.eq(data.index).addClass('opened');
            $content.eq(data.index).show();
          }
          return this;
        case 'toggle':
          $(".content" + data.contentSelector, this).toggle(data.show).prev().toggle(data.show);
          return this;
        default:
          return this.each(function() {
            var defaults, settings;
            defaults = {
              openedContentIndex: 0,
              delay: 200
            };
            settings = $.extend({}, defaults, options);
            $('.header', this).eq(settings.openedContentIndex).addClass('opened');
            $('.content', this).eq(settings.openedContentIndex).show();
            return $('.header', this).click(function() {
              $content = $(this).next();
              if ($content.is(':visible')) {
                return;
              }
              $(this).siblings('.opened').next().slideUp(settings.delay, function() {
                return $(this).prev().removeClass('opened');
              });
              return $content.slideDown(settings.delay, function() {
                return $(this).prev().addClass('opened').trigger('open');
              });
            });
          });
      }
    };
  });

}).call(this);
