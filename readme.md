# PHP Alerts

Application alert handling class that easily set the message of most common types, and dumps them with HTML markup if needed.



Use to set arbitrarily types of alerts:

```
Alert::set("error", "Error occured");
Alert::set("error", ["Bad phone", "Bad address"]);
```



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
