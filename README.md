# Documentation

## Table of Contents

| Method | Description |
|--------|-------------|
| [**Collection**](#Collection) | Default implementation a Collection |
| [Collection::__construct](#Collection__construct) | Collection constructor. |
| [Collection::__toString](#Collection__toString) | Overrides the default string representation of the class. |
| [Collection::type](#Collectiontype) |  |
| [Collection::toArray](#CollectiontoArray) |  |
| [Collection::jsonSerialize](#CollectionjsonSerialize) | Specify data which should be serialized to JSON. |
| [Collection::count](#Collectioncount) |  |
| [Collection::rewind](#Collectionrewind) | Moves the iterator cursor to the beginning. |
| [Collection::current](#Collectioncurrent) |  |
| [Collection::key](#Collectionkey) |  |
| [Collection::next](#Collectionnext) | Moves the iterator cursor to the next position. |
| [Collection::valid](#Collectionvalid) |  |
| [Collection::elements](#Collectionelements) |  |
| [Collection::at](#Collectionat) |  |
| [Collection::first](#Collectionfirst) |  |
| [Collection::last](#Collectionlast) |  |
| [Collection::all](#Collectionall) |  |
| [Collection::every](#Collectionevery) |  |
| [Collection::slice](#Collectionslice) |  |
| [Collection::merge](#Collectionmerge) |  |
| [Collection::push](#Collectionpush) |  |
| [Collection::pushMany](#CollectionpushMany) | Appends the specified elements to the end of the Collection. |
| [Collection::unshift](#Collectionunshift) |  |
| [Collection::unshiftMany](#CollectionunshiftMany) |  |
| [Collection::insert](#Collectioninsert) |  |
| [Collection::insertMany](#CollectioninsertMany) |  |
| [Collection::remove](#Collectionremove) |  |
| [Collection::removeMany](#CollectionremoveMany) |  |
| [Collection::pop](#Collectionpop) |  |
| [Collection::popMany](#CollectionpopMany) |  |
| [Collection::shift](#Collectionshift) |  |
| [Collection::shiftMany](#CollectionshiftMany) |  |
| [Collection::delete](#Collectiondelete) |  |
| [Collection::deleteMany](#CollectiondeleteMany) |  |
| [Collection::each](#Collectioneach) |  |
| [Collection::find](#Collectionfind) |  |
| [Collection::where](#Collectionwhere) |  |
| [Collection::whereAll](#CollectionwhereAll) |  |
| [Collection::whereAny](#CollectionwhereAny) |  |
| [Collection::whereNot](#CollectionwhereNot) |  |
| [Collection::whereNotAll](#CollectionwhereNotAll) |  |
| [Collection::clear](#Collectionclear) |  |
| [Collection::hasIndex](#CollectionhasIndex) |  |
| [Collection::hasElement](#CollectionhasElement) |  |
| [Collection::validIndex](#CollectionvalidIndex) |  |
| [Collection::validElements](#CollectionvalidElements) |  |
| [**CollectionComparisonException**](#CollectionComparisonException) | Class Collection |
| [**CollectionIndexException**](#CollectionIndexException) | Class Collection |
| [**CollectionTypeException**](#CollectionTypeException) | Class Collection |

## Collection

Default implementation a Collection



* Full name: \SpaethTech\Collections\Collection
* This class implements: \JsonSerializable, \Countable, \Iterator


### Collection::__construct

Collection constructor.

```php
Collection::__construct( string type, \SpaethTech\Collections\Collectible[]|null elements = [] ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `type` | **string** |  |
| `elements` | **\SpaethTech\Collections\Collectible[]\|null** |  |


**Return Value:**





---
### Collection::__toString

Overrides the default string representation of the class.

```php
Collection::__toString(  ): string
```





**Return Value:**

Returns a JSON representation of this Model.



---
### Collection::type



```php
Collection::type(  ): string
```





**Return Value:**





---
### Collection::toArray



```php
Collection::toArray(  ): \SpaethTech\Collections\Collectible[]
```





**Return Value:**





---
### Collection::jsonSerialize

Specify data which should be serialized to JSON.

```php
Collection::jsonSerialize(  ): \SpaethTech\Collections\Collectible[]
```





**Return Value:**

Data to be serialized by <b>json_encode</b>, which can be of any type except a resource.


**See Also:**

* http://php.net/manual/en/jsonserializable.jsonserialize.php - 

---
### Collection::count



```php
Collection::count(  ): int
```





**Return Value:**





---
### Collection::rewind

Moves the iterator cursor to the beginning.

```php
Collection::rewind(  ): void
```





**Return Value:**





---
### Collection::current



```php
Collection::current(  ): \SpaethTech\Collections\Collectible
```





**Return Value:**

Returns the currently iterated item.



---
### Collection::key



```php
Collection::key(  ): int
```





**Return Value:**

Returns the current position as the iterator key.



---
### Collection::next

Moves the iterator cursor to the next position.

```php
Collection::next(  ): void
```





**Return Value:**





---
### Collection::valid



```php
Collection::valid(  ): bool
```





**Return Value:**

Returns true if there is a valid element at the current position, otherwise false.



---
### Collection::elements



```php
Collection::elements(  ): \SpaethTech\Collections\Collectible[]
```





**Return Value:**





---
### Collection::at



```php
Collection::at( int index ): \SpaethTech\Collections\Collectible|null
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `index` | **int** |  |


**Return Value:**





---
### Collection::first



```php
Collection::first(  ): \SpaethTech\Collections\Collectible|null
```





**Return Value:**





---
### Collection::last



```php
Collection::last(  ): \SpaethTech\Collections\Collectible|null
```





**Return Value:**





---
### Collection::all



```php
Collection::all(  ): \SpaethTech\Collections\Collection
```





**Return Value:**





---
### Collection::every



```php
Collection::every( array range ): \SpaethTech\Collections\Collection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `range` | **array** |  |


**Return Value:**





---
### Collection::slice



```php
Collection::slice( int index, int count ): \SpaethTech\Collections\Collection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `index` | **int** |  |
| `count` | **int** |  |


**Return Value:**





---
### Collection::merge



```php
Collection::merge( \SpaethTech\Collections\Collection collection ): \SpaethTech\Collections\Collection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `collection` | **\SpaethTech\Collections\Collection** |  |


**Return Value:**





---
### Collection::push



```php
Collection::push( \SpaethTech\Collections\Collectible|null element ): \SpaethTech\Collections\Collection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `element` | **\SpaethTech\Collections\Collectible\|null** |  |


**Return Value:**





---
### Collection::pushMany

Appends the specified elements to the end of the Collection.

```php
Collection::pushMany( \SpaethTech\Collections\Collectible[] elements ): \SpaethTech\Collections\Collection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `elements` | **\SpaethTech\Collections\Collectible[]** | An array of Collectible objects. |


**Return Value:**

Returns the current Collection after the appended values.



---
### Collection::unshift



```php
Collection::unshift( \SpaethTech\Collections\Collectible|null element ): \SpaethTech\Collections\Collection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `element` | **\SpaethTech\Collections\Collectible\|null** |  |


**Return Value:**





---
### Collection::unshiftMany



```php
Collection::unshiftMany( array elements ): \SpaethTech\Collections\Collection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `elements` | **array** |  |


**Return Value:**





---
### Collection::insert



```php
Collection::insert( int index, \SpaethTech\Collections\Collectible|null element ): \SpaethTech\Collections\Collection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `index` | **int** |  |
| `element` | **\SpaethTech\Collections\Collectible\|null** |  |


**Return Value:**





---
### Collection::insertMany



```php
Collection::insertMany( int index, \SpaethTech\Collections\Collectible[] elements ): \SpaethTech\Collections\Collection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `index` | **int** |  |
| `elements` | **\SpaethTech\Collections\Collectible[]** |  |


**Return Value:**





---
### Collection::remove



```php
Collection::remove( int index ): \SpaethTech\Collections\Collection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `index` | **int** |  |


**Return Value:**





---
### Collection::removeMany



```php
Collection::removeMany( int index, int count ): \SpaethTech\Collections\Collection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `index` | **int** |  |
| `count` | **int** |  |


**Return Value:**





---
### Collection::pop



```php
Collection::pop(  ): \SpaethTech\Collections\Collectible|null
```





**Return Value:**





---
### Collection::popMany



```php
Collection::popMany( int count ): \SpaethTech\Collections\Collection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `count` | **int** |  |


**Return Value:**





---
### Collection::shift



```php
Collection::shift(  ): \SpaethTech\Collections\Collectible|null
```





**Return Value:**





---
### Collection::shiftMany



```php
Collection::shiftMany( int count ): \SpaethTech\Collections\Collection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `count` | **int** |  |


**Return Value:**





---
### Collection::delete



```php
Collection::delete( \SpaethTech\Collections\Collectible element, int|null &index = null ): \SpaethTech\Collections\Collection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `element` | **\SpaethTech\Collections\Collectible** |  |
| `index` | **int\|null** |  |


**Return Value:**





---
### Collection::deleteMany



```php
Collection::deleteMany( \SpaethTech\Collections\Collectible[] elements, array|null &indices = null ): \SpaethTech\Collections\Collection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `elements` | **\SpaethTech\Collections\Collectible[]** |  |
| `indices` | **array\|null** |  |


**Return Value:**





---
### Collection::each



```php
Collection::each( callable handler ): \SpaethTech\Collections\Collection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `handler` | **callable** |  |


**Return Value:**





---
### Collection::find



```php
Collection::find( callable evaluator ): \SpaethTech\Collections\Collection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `evaluator` | **callable** |  |


**Return Value:**





---
### Collection::where



```php
Collection::where( string property, value ): \SpaethTech\Collections\Collection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `property` | **string** |  |
| `value` | **** |  |


**Return Value:**





---
### Collection::whereAll



```php
Collection::whereAll( \SpaethTech\Collections\Collectible[] comparisons ): \SpaethTech\Collections\Collection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `comparisons` | **\SpaethTech\Collections\Collectible[]** |  |


**Return Value:**





---
### Collection::whereAny



```php
Collection::whereAny( \SpaethTech\Collections\Collectible[] comparisons ): \SpaethTech\Collections\Collection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `comparisons` | **\SpaethTech\Collections\Collectible[]** |  |


**Return Value:**





---
### Collection::whereNot



```php
Collection::whereNot( string property, value ): \SpaethTech\Collections\Collection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `property` | **string** |  |
| `value` | **** |  |


**Return Value:**





---
### Collection::whereNotAll



```php
Collection::whereNotAll( \SpaethTech\Collections\Collectible[] comparisons ): \SpaethTech\Collections\Collection
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `comparisons` | **\SpaethTech\Collections\Collectible[]** |  |


**Return Value:**





---
### Collection::clear



```php
Collection::clear(  ): \SpaethTech\Collections\Collection
```





**Return Value:**





---
### Collection::hasIndex



```php
Collection::hasIndex( int index ): bool
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `index` | **int** |  |


**Return Value:**





---
### Collection::hasElement



```php
Collection::hasElement( \SpaethTech\Collections\Collectible collectible ): bool
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `collectible` | **\SpaethTech\Collections\Collectible** |  |


**Return Value:**





---
### Collection::validIndex



```php
Collection::validIndex( int index ): int
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `index` | **int** |  |


**Return Value:**





---
### Collection::validElements



```php
Collection::validElements( \SpaethTech\Collections\Collectible[] elements ): \SpaethTech\Collections\Collectible[]
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `elements` | **\SpaethTech\Collections\Collectible[]** |  |


**Return Value:**





---
## CollectionComparisonException

Class Collection



* Full name: \SpaethTech\Collections\Exceptions\CollectionComparisonException
* Parent class: 


## CollectionIndexException

Class Collection



* Full name: \SpaethTech\Collections\Exceptions\CollectionIndexException
* Parent class: 


## CollectionTypeException

Class Collection



* Full name: \SpaethTech\Collections\Exceptions\CollectionTypeException
* Parent class: 


