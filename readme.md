# PHP Alerts

Application alert handling class.



Use to set arbitrarily types of alerts:

```
Alert::set("error", "Error occured");
Alert::set("error", ["Bad phone", "Bad address"]);
```



Print block of alerts with markup:

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
