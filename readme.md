# PHP Alerts

Application alert handling class that easily sets the messages of any type, and dumps them with HTML markup if needed.



Use to set arbitrarily types of alerts:

```
Alert::set("success", "Successfully saved!");
Alert::set("error", ["Bad phone", "Bad address"]);
```
By sending the error type as first attribute, you can group messages within Alert object and get the HTML markup with appropriate CSS classes included.


Print block of alerts with HTML markup:

```
Alert::show();
```



Get all alerts as array:

```
Alert::get();
```



Clear all alerts:

```
Alert::clear();
```
