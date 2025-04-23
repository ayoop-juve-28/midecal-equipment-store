




<!-- [Page Specific JS] start -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
{{-- <script src='{{ asset('assets/js/plugins/apexcharts.min.js') }}'></script> --}}
 {{-- <script src="{{ asset('assets/js/pages/dashboard-default.js')}}"></script> --}}

 <script src="{{ asset('assets/js/plugins/popper.min.js')}}"></script>
 <script src="{{ asset('assets/js/plugins/simplebar.min.js')}}"></script>
 <script src="{{ asset('assets/js/plugins/bootstrap.min.js')}}"></script>
 <script src="{{ asset('assets/js/fonts/custom-font.js')}}"></script>
 <script src="{{ asset('assets/js/config.js')}}"></script>
 <script src="{{ asset('assets/js/pcoded.js')}}"></script>
 <script src="{{ asset('assets/js/plugins/feather.min.js')}}"></script>

 <script src="{{ asset('assets/js/plugins/choices.min.js')}}"></script>

 <script type="text/javascript">

  window.addEventListener('load', function() {
  var loadingOverlay = document.getElementById('loading-overlay');
  loadingOverlay.style.display = 'none';
});

    function showAdImage(ad){
      document.getElementById("adName").innerHTML = ad['name'];
      document.getElementById("adDate").innerHTML = ad['created_at'].split("T")[0];
      var exampleUrl = "";
      document.getElementById("adImage").src = exampleUrl+"/storage/"+ad['img'];
    }

    function showPaymentImage(payment){
      document.getElementById("paymentName").innerHTML = payment['name'];
      var exampleUrl = "";
      document.getElementById("paymentImage").src = exampleUrl+"/storage/"+payment['logo'];
    }

    function showProductData(product){
      document.getElementById("productName").innerHTML = product['name'];
      document.getElementById("productDescription").innerHTML = product['description'];
      document.getElementById("productDescription_en").innerHTML = product['description_en'];
      var exampleUrl = "";
      document.getElementById("productImage").src = exampleUrl+"/storage/"+product['logo'];
    }

    function showClassPayments(classification){
      console.log(classification);
      document.getElementById("classificationName").innerHTML = classification['name'];
      var result = classification['payments'];
      var table = document.getElementById("bodyrow33");
      table.innerHTML = "";

      for(var i=0; i<result.length;i++){
          if (top) { var row = table.insertRow(-1); }
          else { var row = table.insertRow(); }

          // (B3) INSERT CELLS
          var cell = row.insertCell();
          cell.innerHTML = result[i]['payment']['name'];
      }
    }

    function showCategoryImage(category){
      document.getElementById("categoryName").innerHTML = category['name'];
      var exampleUrl = "";
      document.getElementById("categoryImage").src = exampleUrl+"/storage/"+category['logo'];
    }

    function showCustpmerPhones(customer){
      document.getElementById("customerName").innerHTML = customer['name'];
      var result = customer['phone_numbers'];
      var table = document.getElementById("bodyrow44");
      table.innerHTML = "";

      if (top) { var row = table.insertRow(-1); }
          else { var row = table.insertRow(); }
          // (B3) INSERT CELLS
          var cell = row.insertCell();
          cell.innerHTML = customer['mobile_number'];

      for(var i=0; i<result.length;i++){
          if (top) { var row = table.insertRow(-1); }
          else { var row = table.insertRow(); }

          // (B3) INSERT CELLS
          var cell = row.insertCell();
          cell.innerHTML = result[i]['mobile_number'];
      }
    }

    function showOrderCards(order){
      console.log(order);
      document.getElementById("orderName").innerHTML = order['customer']['mobile_number'];

      var result = order['cards'];
      var table = document.getElementById("bodyrow");
      table.innerHTML = "";
      for(var i=0; i<result.length;i++){
          if (top) { var row = table.insertRow(-1); }
          else { var row = table.insertRow(); }

          // (B3) INSERT CELLS
          var cell = row.insertCell();
          cell.innerHTML = result[i]['classification']['name'];
          cell = row.insertCell();
          cell.innerHTML = result[i]['quantity'];
          cell = row.insertCell();
          cell.innerHTML = result[i]['classification']['price'];
          cell.style.color="green";
      }

    }

    function hide(){
      document.getElementById("hide").style.display = "none";
    }
    function hide3(){
      document.getElementById("hide3").style.display = "none";
    }
    function hide2(){
      document.getElementById("hide2").style.display = "none";
    }


    document.addEventListener('DOMContentLoaded', function () {
        var genericExamples = document.querySelectorAll('[data-trigger]');
        for (i = 0; i < genericExamples.length; ++i) {
          var element = genericExamples[i];
          new Choices(element, {
            placeholderValue: 'This is a placeholder set in the config',
            searchPlaceholderValue: 'This is a search placeholder'
          });
        }

        var textRemove = new Choices(document.getElementById('choices-text-remove-button'), {
          delimiter: ',',
          editItems: true,
          maxItemCount: 5,
          removeItemButton: true
        });

        var text_Unique_Val = new Choices('#choices-text-unique-values', {
          paste: false,
          duplicateItemsAllowed: false,
          editItems: true
        });

        var text_i18n = new Choices('#choices-text-i18n', {
          paste: false,
          duplicateItemsAllowed: false,
          editItems: true,
          maxItemCount: 5,
          addItemText: function (value) {
            return 'Appuyez sur Entrée pour ajouter <b>"' + String(value) + '"</b>';
          },
          maxItemText: function (maxItemCount) {
            return String(maxItemCount) + 'valeurs peuvent être ajoutées';
          },
          uniqueItemText: 'Cette valeur est déjà présente'
        });

        var textEmailFilter = new Choices('#choices-text-email-filter', {
          editItems: true,
          addItemFilter: function (value) {
            if (!value) {
              return false;
            }

            const regex =
              /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            const expression = new RegExp(regex.source, 'i');
            return expression.test(value);
          }
        }).setValue(['joe@bloggs.com']);

        var textDisabled = new Choices('#choices-text-disabled', {
          addItems: false,
          removeItems: false
        }).disable();

        var textPrependAppendVal = new Choices('#choices-text-prepend-append-value', {
          prependValue: 'item-',
          appendValue: '-' + Date.now()
        }).removeActiveItems();

        var textPresetVal = new Choices('#choices-text-preset-values', {
          items: [
            'Josh Johnson',
            {
              value: 'joe@bloggs.co.uk',
              label: 'Joe Bloggs',
              customProperties: {
                description: 'Joe Blogg is such a generic name'
              }
            }
          ]
        });

        var multipleDefault = new Choices(document.getElementById('choices-multiple-groups'));

        var multipleFetch = new Choices('#choices-multiple-remote-fetch', {
          placeholder: true,
          placeholderValue: 'Pick an Strokes record',
          maxItemCount: 5
        }).setChoices(function () {
          return fetch('https://api.discogs.com/artists/55980/releases?token=QBRmstCkwXEvCjTclCpumbtNwvVkEzGAdELXyRyW')
            .then(function (response) {
              return response.json();
            })
            .then(function (data) {
              return data.releases.map(function (release) {
                return {
                  value: release.title,
                  label: release.title
                };
              });
            });
        });

        var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
          removeItemButton: true
        });

        /* Use label on event */
        var choicesSelect = new Choices('#choices-multiple-labels', {
          removeItemButton: true,
          choices: [
            {
              value: 'One',
              label: 'Label One'
            },
            {
              value: 'Two',
              label: 'Label Two',
              disabled: true
            },
            {
              value: 'Three',
              label: 'Label Three'
            }
          ]
        }).setChoices(
          [
            {
              value: 'Four',
              label: 'Label Four',
              disabled: true
            },
            {
              value: 'Five',
              label: 'Label Five'
            },
            {
              value: 'Six',
              label: 'Label Six',
              selected: true
            }
          ],
          'value',
          'label',
          false
        );

        choicesSelect.passedElement.element.addEventListener('addItem', function (event) {
          document.getElementById('message').innerHTML =
            '<span class="badge bg-light-primary"> You just added "' + event.detail.label + '"</span>';
        });
        choicesSelect.passedElement.element.addEventListener('removeItem', function (event) {
          document.getElementById('message').innerHTML =
            '<span class="badge bg-light-danger"> You just removed "' + event.detail.label + '"</span>';
        });

        var singleFetch = new Choices('#choices-single-remote-fetch', {
          searchPlaceholderValue: 'Search for an Arctic Monkeys record'
        })
          .setChoices(function () {
            return fetch('https://api.discogs.com/artists/391170/releases?token=QBRmstCkwXEvCjTclCpumbtNwvVkEzGAdELXyRyW')
              .then(function (response) {
                return response.json();
              })
              .then(function (data) {
                return data.releases.map(function (release) {
                  return {
                    label: release.title,
                    value: release.title
                  };
                });
              });
          })
          .then(function (instance) {
            instance.setChoiceByValue('Fake Tales Of San Francisco');
          });

        var singleXhrRemove = new Choices('#choices-single-remove-xhr', {
          removeItemButton: true,
          searchPlaceholderValue: "Search for a Smiths' record"
        }).setChoices(function (callback) {
          return fetch('https://api.discogs.com/artists/83080/releases?token=QBRmstCkwXEvCjTclCpumbtNwvVkEzGAdELXyRyW')
            .then(function (res) {
              return res.json();
            })
            .then(function (data) {
              return data.releases.map(function (release) {
                return {
                  label: release.title,
                  value: release.title
                };
              });
            });
        });

        var singleNoSearch = new Choices('#choices-single-no-search', {
          searchEnabled: false,
          removeItemButton: true,
          choices: [
            {
              value: 'One',
              label: 'Label One'
            },
            {
              value: 'Two',
              label: 'Label Two',
              disabled: true
            },
            {
              value: 'Three',
              label: 'Label Three'
            }
          ]
        }).setChoices(
          [
            {
              value: 'Four',
              label: 'Label Four',
              disabled: true
            },
            {
              value: 'Five',
              label: 'Label Five'
            },
            {
              value: 'Six',
              label: 'Label Six',
              selected: true
            }
          ],
          'value',
          'label',
          false
        );

        var singlePresetOpts = new Choices('#choices-single-preset-options', {
          placeholder: true
        }).setChoices(
          [
            {
              label: 'Group one',
              id: 1,
              disabled: false,
              choices: [
                {
                  value: 'Child One',
                  label: 'Child One',
                  selected: true
                },
                {
                  value: 'Child Two',
                  label: 'Child Two',
                  disabled: true
                },
                {
                  value: 'Child Three',
                  label: 'Child Three'
                }
              ]
            },
            {
              label: 'Group two',
              id: 2,
              disabled: false,
              choices: [
                {
                  value: 'Child Four',
                  label: 'Child Four',
                  disabled: true
                },
                {
                  value: 'Child Five',
                  label: 'Child Five'
                },
                {
                  value: 'Child Six',
                  label: 'Child Six'
                }
              ]
            }
          ],
          'value',
          'label'
        );

        var singleSelectedOpt = new Choices('#choices-single-selected-option', {
          searchFields: ['label', 'value', 'customProperties.description'],
          choices: [
            {
              value: 'One',
              label: 'Label One',
              selected: true
            },
            {
              value: 'Two',
              label: 'Label Two',
              disabled: true
            },
            {
              value: 'Three',
              label: 'Label Three',
              customProperties: {
                description: 'This option is fantastic'
              }
            }
          ]
        }).setChoiceByValue('Two');

        var customChoicesPropertiesViaDataAttributes = new Choices('#choices-with-custom-props-via-html', {
          searchFields: ['label', 'value', 'customProperties']
        });

        var singleNoSorting = new Choices('#choices-single-no-sorting', {
          shouldSort: false
        });

        var cities = new Choices(document.getElementById('cities'));
        var tubeStations = new Choices(document.getElementById('tube-stations')).disable();

        cities.passedElement.element.addEventListener('change', function (e) {
          if (e.detail.value === 'London') {
            tubeStations.enable();
          } else {
            tubeStations.disable();
          }
        });

        var customTemplates = new Choices(document.getElementById('choices-single-custom-templates'), {
          callbackOnCreateTemplates: function (strToEl) {
            var classNames = this.config.classNames;
            var itemSelectText = this.config.itemSelectText;
            return {
              item: function (classNames, data) {
                return strToEl(
                  '\
                                <div\
                                class="' +
                    String(classNames.item) +
                    ' ' +
                    String(data.highlighted ? classNames.highlightedState : classNames.itemSelectable) +
                    '"\
                                data-item\
                                data-id="' +
                    String(data.id) +
                    '"\
                                data-value="' +
                    String(data.value) +
                    '"\
                                ' +
                    String(data.active ? 'aria-selected="true"' : '') +
                    '\
                                ' +
                    String(data.disabled ? 'aria-disabled="true"' : '') +
                    '\
                                >\
                                <span style="margin-right:10px;">🎉</span> ' +
                    String(data.label) +
                    '\
                                </div>\
                                '
                );
              },
              choice: function (classNames, data) {
                return strToEl(
                  '\
                                <div\
                                class="' +
                    String(classNames.item) +
                    ' ' +
                    String(classNames.itemChoice) +
                    ' ' +
                    String(data.disabled ? classNames.itemDisabled : classNames.itemSelectable) +
                    '"\
                                data-select-text="' +
                    String(itemSelectText) +
                    '"\
                                data-choice \
                                ' +
                    String(data.disabled ? 'data-choice-disabled aria-disabled="true"' : 'data-choice-selectable') +
                    '\
                                data-id="' +
                    String(data.id) +
                    '"\
                                data-value="' +
                    String(data.value) +
                    '"\
                                ' +
                    String(data.groupId > 0 ? 'role="treeitem"' : 'role="option"') +
                    '\
                                >\
                                <span style="margin-right:10px;">👉🏽</span> ' +
                    String(data.label) +
                    '\
                                </div>\
                                '
                );
              }
            };
          }
        });

        var resetSimple = new Choices(document.getElementById('reset-simple'));

        var resetMultiple = new Choices('#reset-multiple', {
          removeItemButton: true
        });
      });

</script>
<!-- [card---hart---bouttn JS] start -->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.like-btn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                this.classList.toggle('active');
                const icon = this.querySelector('i');
                icon.classList.toggle('bi-heart');
                icon.classList.toggle('bi-heart-fill');
            });
        });
    });
</script>
<!-- [card---hart---bouttn JS] END -->
