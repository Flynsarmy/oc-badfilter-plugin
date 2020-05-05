# Bad List Filter Example

Demonstrates a JS error on List pages with an empty filter defined

## The Issue

If a `ListController` has a `filter` option but there are no filters defined in the filters config file, visiting the `ListController` page gives a javascript error instead of simply not displaying the `ListFilter`. In older versions of October CMS no error was present and the `Filter` widget just wouldn't display.

## Steps to Replicate

* Create a controller with `ListController` behavior.
* In *config_list.yaml* add `filter: config_filter.yaml`
* In *config_filter.yaml* add `scopes:` and nothing else
* Visit the controller in the backend and you'll be presented with the error:
  > Uncaught TypeError: Cannot read property 'hasAttribute' of undefined
  >    at FilterWidget.init (storm-min.js?v=465:3255)
  >    at FilterWidget.init (storm-min.js?v=465:3392)
  >    at new FilterWidget (storm-min.js?v=465:3052)
  >    at HTMLDivElement.<anonymous> (storm-min.js?v=465:3247)
  >    at Function.each (jquery.min.js?v=465:2)
  >    at e.fn.init.each (jquery.min.js?v=465:2)
  >    at e.fn.init.$.fn.filterWidget (storm-min.js?v=465:3244)
  >    at HTMLDocument.<anonymous> (storm-min.js?v=465:3254)
  >    at HTMLDocument.dispatch (jquery.min.js?v=465:2)
  >    at HTMLDocument.v.handle (jquery.min.js?v=465:2)

Records in the list can no longer be clicked properly, there are no hover highlights etc.


## Steps to Replicate

* `git clone` to */plugins/flynsarmy/badfilter*
* `php artisan plugin:refresh Flynsarmy.Badfilter`
* In your browser visit */backend/flynsarmy/badfilter/threads*