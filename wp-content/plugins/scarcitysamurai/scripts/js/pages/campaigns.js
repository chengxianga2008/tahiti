// Generated by CoffeeScript 1.6.3
/*

LEGAL COPYRIGHT NOTICE

Copyright (c) Noble Samurai Pty Ltd, 2008-2013. All Rights Reserved.

This software is proprietary to and embodies the confidential technology of Noble Samurai Pty Ltd.
Possession, use, dissemination or copying of this software and media is authorised only pursuant
to a valid written license from Noble Samurai Pty Ltd. Questions or requests regarding permission may
be sent by email to legal@noblesamurai.com or by post to PO Box 477, Blackburn Victoria 3130, Australia.
*/


(function() {
  var __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

  jQuery(function($) {
    var ScarcitySamuraiCampaigns;
    ScarcitySamuraiCampaigns = (function() {
      function ScarcitySamuraiCampaigns() {
        this.updateApplyButton = __bind(this.updateApplyButton, this);
        this.$form = $('#ss-campaigns-form');
        this.$bulkActionsSelect = this.$form.find('.tablenav select');
        this.$performBulkActionButton = this.$form.find('#doaction');
        this.createBindings();
        this.updateApplyButton();
      }

      ScarcitySamuraiCampaigns.prototype.createBindings = function() {
        var self, togglesSettings;
        self = this;
        $('.row-actions .delete a').click(function(event) {
          if (!confirm('Are you sure?')) {
            return event.preventDefault();
          }
        });
        this.$performBulkActionButton.click(function(event) {
          var action;
          action = $(this).parent().find('select').val();
          switch (action) {
            case 'bulk-delete':
              if (!confirm('Are you sure?')) {
                return event.preventDefault();
              }
          }
        });
        this.$form.find('tbody .check-column input').click(this.updateApplyButton);
        this.$bulkActionsSelect.change(this.updateApplyButton);
        this.$form.find('thead .check-column input').click(function() {
          return self.$performBulkActionButton.attr('disabled', self.$bulkActionsSelect.val() === '-1' || !this.checked);
        });
        togglesSettings = {
          text: {
            on: 'YES',
            off: 'NO'
          },
          width: 75,
          height: 30
        };
        $('.ss-toggle-on').toggles(_.extend(togglesSettings, {
          on: true
        }));
        $('.ss-toggle-off').toggles(_.extend(togglesSettings, {
          on: false
        }));
        return $('.ss-toggle-on, .ss-toggle-off').on('toggle', function(e, active) {
          return self.activateDeactivateCampaign($(this).data('ss-campaign-id'), active);
        });
      };

      ScarcitySamuraiCampaigns.prototype.updateApplyButton = function() {
        var disabled;
        disabled = this.$bulkActionsSelect.val() === '-1' || this.$form.find('tbody :checked').length === 0;
        return this.$performBulkActionButton.attr('disabled', disabled);
      };

      ScarcitySamuraiCampaigns.prototype.activateDeactivateCampaign = function(campaignId, activate) {
        return ScarcitySamuraiHelper.ajax('ss_activate_deactivate_campaigns', {
          campaign_ids: [campaignId],
          activate: activate
        }, function(result) {
          if (result.success !== true) {
            return alert(result.data);
          }
        });
      };

      return ScarcitySamuraiCampaigns;

    })();
    return new ScarcitySamuraiCampaigns();
  });

}).call(this);