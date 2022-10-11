# Indian Postal Code
Laravel indian postal code package.<br />
The term Postal Index Number (PIN) is popularly known as PIN code/Postal Code in India. It is a code in the post office number of the postal code system which is used in India Post for segregating the mails. The PIN code consists of six digits.
<br /><br />

# Requirements

<a href="https://www.php.net" target="_blank" rel="noreferrer">PHP:  ^7.3 or ^8.0</a><br />
<a href="https://laravel.com/" target="_blank" rel="noreferrer">Laravel Framework</a>
<br /><br />

# Quick Installation

<pre>composer require codetyme/postal:<span class="pl-s"><span class="pl-pds">"</span>^1.0<span class="pl-pds">"</span></span></pre>

<br />

# How to use

In your controller

<pre>
public static function FindByPincode(\Codetyme\Postal\Postal $postal){
    return $postal->pin('400001');
}
</pre>

<pre>
public static function FindByPostOffice(\Codetyme\Postal\Postal $postal){
    return $postal->branch('Mumbai');
}
</pre>

API returns the response in JSON format. <code>Status</code> field in response is set to <code>SUCCESS</code> or <code>ERROR</code>, <code>Message</code> field will return message against the request and <code>PostOffice</code> field will return data.

<br />

# Thanks
<a href="http://www.postalpincode.in/" target="_blank" rel="noreferrer">www.postalpincode.in</a>

<br />

# License
The MIT License (MIT). Please see <a href="https://github.com/codetyme/postal/blob/master/LICENSE.md" rel="noreferrer">License File</a> for more information.
