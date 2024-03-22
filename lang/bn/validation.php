<?php

return [

    'accepted' => 'এই :attribute ফিল্ডটি গ্রহণ করা আবশ্যক।',
    'accepted_if' => 'এই :attribute ফিল্ডটি :other হলে :value গ্রহণ করা আবশ্যক।',
    'active_url' => 'এই :attribute ফিল্ডটি একটি বৈধ URL হতে হবে।',
    'after' => 'এই :attribute ফিল্ডটি :date এর পরের একটি তারিখ হতে হবে।',
    'after_or_equal' => 'এই :attribute ফিল্ডটি :date এর পরে বা সমান তারিখ হতে হবে।',
    'alpha' => 'এই :attribute ফিল্ডটি শুধুমাত্র অক্ষর ধারণ করতে পারে।',
    'alpha_dash' => 'এই :attribute ফিল্ডটি শুধুমাত্র অক্ষর, সংখ্যা, ড্যাশ, এবং আন্ডারস্কোর ধারণ করতে পারে।',
    'alpha_num' => 'এই :attribute ফিল্ডটি শুধুমাত্র অক্ষর এবং সংখ্যা ধারণ করতে পারে।',
    'array' => 'এই :attribute ফিল্ডটি অ্যারে হতে হবে।',
    'ascii' => 'এই :attribute ফিল্ডটি শুধুমাত্র সিঙ্গেল-বাইট অ্যালফানিউমেরিক অক্ষর এবং প্রতীক ধারণ করতে পারে।',
    'before' => 'এই :attribute ফিল্ডটি :date এর আগের একটি তারিখ হতে হবে।',
    'before_or_equal' => 'এই :attribute ফিল্ডটি :date এর আগে বা সমান তারিখ হতে হবে।',
    'between' => [
        'array' => 'এই :attribute ফিল্ডটির মধ্যে অবশ্যই :min থেকে :max আইটেম হতে হবে।',
        'file' => 'এই :attribute ফিল্ডটির মধ্যে অবশ্যই :min থেকে :max কিলোবাইট হতে হবে।',
        'numeric' => 'এই :attribute ফিল্ডটির মধ্যে অবশ্যই :min থেকে :max হতে হবে।',
        'string' => 'এই :attribute ফিল্ডটির মধ্যে অবশ্যই :min থেকে :max অক্ষর হতে হবে।',
    ],
    'boolean' => 'এই :attribute ফিল্ডটি সত্য বা মিথ্যা হতে হবে।',
    'can' => 'এই :attribute ফিল্ডটি অননুমোদিত মান ধারণ করে।',
    'confirmed' => 'এই :attribute ফিল্ডটির নিশ্চিতকরণ মেলে না।',
    'current_password' => 'পাসওয়ার্ড ভুল।',
    'date' => 'এই :attribute ফিল্ডটি একটি বৈধ তারিখ হতে হবে।',
    'date_equals' => 'এই :attribute ফিল্ডটি একটি তারিখ হতে হবে যা :date এর সমান।',
    'date_format' => 'এই :attribute ফিল্ডটি ফরম্যাটে মেলে না :format।',
    'decimal' => 'এই :attribute ফিল্ডটি অবশ্যই :decimal দশমিক স্থান হতে হবে।',
    'declined' => 'এই :attribute ফিল্ডটি অগ্রাহ্য হতে হবে।',
    'declined_if' => 'এই :attribute ফিল্ডটি :other হলে :value গ্রহণ করা অগ্রাহ্য হবে।',
    'different' => 'এই :attribute ফিল্ড এবং :other অবশ্যই পার্থক্য করতে হবে।',
    'digits' => 'এই :attribute ফিল্ডটি অবশ্যই :digits ডিজিট হতে হবে।',
    'digits_between' => 'এই :attribute ফিল্ডটি অবশ্যই :min এবং :max ডিজিটের মধ্যে হতে হবে।',
    'dimensions' => 'এই :attribute ফিল্ডটির মাত্রা অবৈধ ছবির মাত্রা রয়েছে।',
    'distinct' => 'এই :attribute ফিল্ডটির একটি ডুপ্লিকেট মান রয়েছে।',
    'doesnt_end_with' => 'এই :attribute ফিল্ডটি নিম্নলিখিত মধ্যে শেষ হতে পারে না: :values।',
    'doesnt_start_with' => 'এই :attribute ফিল্ডটি নিম্নলিখিত মধ্যে শুরু হতে পারে না: :values।',
    'email' => 'এই :attribute ফিল্ডটি একটি বৈধ ইমেল ঠিকানা হতে হবে।',
    'ends_with' => 'এই :attribute ফিল্ডটি নিম্নলিখিত মধ্যে শেষ হতে হবে একটি: :values।',
    'enum' => 'নির্বাচিত :attribute অবৈধ।',
    'exists' => 'নির্বাচিত :attribute অবৈধ।',
    'file' => 'এই :attribute ফিল্ডটি একটি ফাইল হতে হবে।',
    'filled' => 'এই :attribute ফিল্ডটির একটি মান থাকতে হবে।',
    'gt' => [
        'array' => 'এই :attribute ফিল্ডটির অবশ্যই :value এর চেয়ে অধিক আইটেম থাকতে হবে।',
        'file' => 'এই :attribute ফিল্ডটির অবশ্যই :value কিলোবাইটের চেয়ে বেশি হতে হবে।',
        'numeric' => 'এই :attribute ফিল্ডটির অবশ্যই :value এর চেয়ে বেশি হতে হবে।',
        'string' => 'এই :attribute ফিল্ডটির অবশ্যই :value অক্ষরের চেয়ে বেশি হতে হবে।',
    ],
    'gte' => [
        'array' => 'এই :attribute ফিল্ডটির অবশ্যই :value আইটেম অথবা তার অধিক থাকতে হবে।',
        'file' => 'এই :attribute ফিল্ডটির অবশ্যই :value কিলোবাইটের সমান বা বেশি হতে হবে।',
        'numeric' => 'এই :attribute ফিল্ডটির অবশ্যই :value সমান বা বেশি হতে হবে।',
        'string' => 'এই :attribute ফিল্ডটির অবশ্যই :value অক্ষরের সমান বা বেশি হতে হবে।',
    ],
    'image' => 'এই :attribute ফিল্ডটি একটি ছবি হতে হবে।',
    'in' => 'নির্বাচিত :attribute অবৈধ।',
    'in_array' => 'এই :attribute ফিল্ডটি :other এ বিদ্যমান থাকতে হবে।',
    'integer' => 'এই :attribute ফিল্ডটি একটি পূর্ণসংখ্যা হতে হবে।',
    'ip' => 'এই :attribute ফিল্ডটি একটি বৈধ আইপি ঠিকানা হতে হবে।',
    'ipv4' => 'এই :attribute ফিল্ডটি একটি বৈধ IPv4 ঠিকানা হতে হবে।',
    'ipv6' => 'এই :attribute ফিল্ডটি একটি বৈধ IPv6 ঠিকানা হতে হবে।',
    'json' => 'এই :attribute ফিল্ডটি একটি বৈধ JSON স্ট্রিং হতে হবে।',
    'lowercase' => 'এই :attribute ফিল্ডটি ছোট হাতের অক্ষরে হতে হবে।',
    'lt' => [
        'array' => 'এই :attribute ফিল্ডটির অবশ্যই :value এর চেয়ে কম আইটেম থাকতে হবে।',
        'file' => 'এই :attribute ফিল্ডটির অবশ্যই :value কিলোবাইটের চেয়ে কম হতে হবে।',
        'numeric' => 'এই :attribute ফিল্ডটির অবশ্যই :value এর চেয়ে কম হতে হবে।',
        'string' => 'এই :attribute ফিল্ডটির অবশ্যই :value অক্ষরের চেয়ে কম হতে হবে।',
    ],
    'lte' => [
        'array' => 'এই :attribute ফিল্ডটির অবশ্যই :value আইটেমের বেশি থাকতে পারে না।',
        'file' => 'এই :attribute ফিল্ডটির অবশ্যই :value কিলোবাইট বা তার কম হতে হবে।',
        'numeric' => 'এই :attribute ফিল্ডটির অবশ্যই :value এর সমান বা তার কম হতে হবে।',
        'string' => 'এই :attribute ফিল্ডটির অবশ্যই :value অক্ষর বা তার কম হতে হবে।',
    ],
    'mac_address' => 'এই :attribute ফিল্ডটি একটি বৈধ MAC ঠিকানা হতে হবে।',
    'max' => [
        'array' => 'এই :attribute ফিল্ডটির অবশ্যই :max আইটেমের বেশি থাকতে পারে না।',
        'file' => 'এই :attribute ফিল্ডটির অবশ্যই :max কিলোবাইটের সমান বা তার কম হতে হবে।',
        'numeric' => 'এই :attribute ফিল্ডটির অবশ্যই :max এর সমান বা তার কম হতে হবে।',
        'string' => 'এই :attribute ফিল্ডটির অবশ্যই :max অক্ষর বা তার কম হতে হবে।',
    ],
    'max_digits' => 'এই :attribute ফিল্ডটির অবশ্যই :max ডিজিটের বেশি থাকতে পারে না।',
    'mimes' => 'এই :attribute ফিল্ডটি একটি :values ধরনের ফাইল হতে হবে।',
    'mimetypes' => 'এই :attribute ফিল্ডটি একটি :values ধরনের ফাইল হতে হবে।',
    'min' => [
        'array' => 'এই :attribute ফিল্ডটির অবশ্যই অন্তত :min আইটেম থাকতে হবে।',
        'file' => 'এই :attribute ফিল্ডটির অবশ্যই অন্তত :min কিলোবাইট হতে হবে।',
        'numeric' => 'এই :attribute ফিল্ডটির অবশ্যই অন্তত :min হতে হবে।',
        'string' => 'এই :attribute ফিল্ডটির অবশ্যই অন্তত :min অক্ষর হতে হবে।',
    ],
    'min_digits' => 'এই :attribute ফিল্ডটির অবশ্যই অন্তত :min সংখ্যার ডিজিট থাকতে হবে।',
    'missing' => 'এই :attribute ফিল্ডটি অন্যান্যের অভাবে অবশ্যই থাকতে হবে।',
    'missing_if' => 'এই :attribute ফিল্ডটি :other এর মান :value হলে অবশ্যই অন্যান্যের অভাবে থাকতে হবে।',
    'missing_unless' => 'এই :attribute ফিল্ডটি :other এর মান :value না হলে অবশ্যই অন্যান্যের অভাবে থাকতে হবে।',
    'missing_with' => 'এই :attribute ফিল্ডটি :values উপস্থিত হলে অবশ্যই অন্যান্যের অভাবে থাকতে হবে।',
    'missing_with_all' => 'এই :attribute ফিল্ডটি সমস্ত :values উপস্থিত হলে অবশ্যই অন্যান্যের অভাবে থাকতে হবে।',
    'multiple_of' => 'এই :attribute ফিল্ডটি অবশ্যই :value এর গুণিতক হতে হবে।',
    'not_in' => 'নির্বাচিত :attribute অকার্যকর।',
    'not_regex' => 'এই :attribute ফিল্ডটির ফরম্যাট অকার্যকর।',
    'numeric' => 'এই :attribute ফিল্ডটি একটি সংখ্যা হতে হবে।',
    'password' => [
        'letters' => ':attribute ফিল্ডটিতে অন্তত একটি অক্ষর থাকা আবশ্যক।',
        'mixed' => ':attribute ফিল্ডটিতে অন্তত একটি বৃহত্তম এবং একটি ছোট্ট অক্ষর থাকা আবশ্যক।',
        'numbers' => ':attribute ফিল্ডটিতে অন্তত একটি সংখ্যা থাকা আবশ্যক।',
        'symbols' => ':attribute ফিল্ডটিতে অন্তত একটি চিহ্ন থাকা আবশ্যক।',
        'uncompromised' => 'দেওয়া :attribute ডেটা লিকে প্রদর্শিত হয়েছে। দয়া করে একটি পৃথক :attribute নির্বাচন করুন।',
    ],
    'present' => ':attribute ফিল্ডটি উপস্থিত থাকতে হবে।',
    'prohibited' => ':attribute ফিল্ডটি নিষিদ্ধ।',
    'prohibited_if' => ':attribute ফিল্ডটি :other এর মান :value হলে নিষিদ্ধ।',
    'prohibited_unless' => ':attribute ফিল্ডটি :other এই মধ্যে থাকলে নিষিদ্ধ।',
    'prohibits' => ':attribute ফিল্ডটি :other এর উপস্থিতিকে নিষিদ্ধ করে।',
    'regex' => ':attribute ফিল্ডটির ফরম্যাট অকার্যকর।',
    'required' => ':attribute ফিল্ডটি প্রয়োজনীয়।',
    'required_array_keys' => ':values জন্য :attribute ফিল্ডটিতে এন্ট্রি অবশ্যই থাকতে হবে।',
    'required_if' => ':other এর মান :value হলে :attribute ফিল্ডটি প্রয়োজনীয়।',
    'required_if_accepted' => ':other গৃহীত হলে :attribute ফিল্ডটি প্রয়োজনীয়।',
    'required_unless' => ':other মধ্যে না থাকলে :attribute ফিল্ডটি প্রয়োজনীয়।',
    'required_with' => ':values উপস্থিত হলে :attribute ফিল্ডটি প্রয়োজনীয়।',
    'required_with_all' => ':values সহ উপস্থিত হলে :attribute ফিল্ডটি প্রয়োজনীয়।',
    'required_without' => ':values অনুপস্থিত হলে :attribute ফিল্ডটি প্রয়োজনীয়।',
    'required_without_all' => 'কোনো একটি অথবা সব :values অনুপস্থিত হলে :attribute ফিল্ডটি প্রয়োজনীয়।',
    'same' => ':attribute ফিল্ডটি অবশ্যই :other এর সাথে মেলানো হতে হবে।',
    'size' => [
        'array' => ':attribute ফিল্ডটিতে :size আইটেম থাকা আবশ্যক।',
        'file' => ':attribute ফিল্ডটি অবশ্যই :size কিলোবাইট হতে হবে।',
        'numeric' => ':attribute ফিল্ডটি অবশ্যই :size হতে হবে।',
        'string' => ':attribute ফিল্ডটি অবশ্যই :size অক্ষর হতে হবে।',
    ],
    'starts_with' => ':attribute ফিল্ডটি নিম্নলিখিত মধ্যে একটি দিয়ে শুরু হতে হবে: :values।',
    'string' => ':attribute ফিল্ডটি অবশ্যই স্ট্রিং হতে হবে।',
    'timezone' => ':attribute ফিল্ডটি অবশ্যই বৈধ টাইমজোন হতে হবে।',
    'unique' => ':attribute ইতিমধ্যে নেওয়া হয়েছে।',
    'uploaded' => ':attribute আপলোড করা যায়নি।',
    'uppercase' => ':attribute ফিল্ডটি অবশ্যই বড় হাতের অক্ষর হতে হবে।',
    'url' => ':attribute ফিল্ডটি অবশ্যই বৈধ URL হতে হবে।',
    'ulid' => ':attribute ফিল্ডটি অবশ্যই বৈধ ULID হতে হবে।',
    'uuid' => ':attribute ফিল্ডটি অবশ্যই বৈধ UUID হতে হবে।',

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    'attributes' => [],

];
