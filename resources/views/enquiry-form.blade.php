<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Form</title>
    <style>
        @page {
            size: A4;
            margin: 0;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            width: 210mm;
            font-family: "Times New Roman", Times, serif;
            font-size: 3.2mm;
            color: #2d2d2d;
            background: #ffffff;
        }

        * {
            box-sizing: border-box;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }

        .sheet {
            width: 210mm;
            margin: 0 auto;
        }

        .page {
            width: 210mm;
            height: 297mm;
            padding: 7.5mm 10.5mm 7mm 10.5mm;
            position: relative;
            overflow: hidden;
            page-break-after: always;
            break-after: page;
        }

        .page:last-child {
            page-break-after: auto;
            break-after: auto;
        }

        .brand-box {
            border: 0.2mm solid #c2c2c2;
            padding: 1.1mm 1.7mm 1.2mm 1.7mm;
        }

        .brand-main-row {
            display: flex;
            align-items: center;
        }

        .logo-square {
            width: 17mm;
            height: 17mm;
            border: 0.25mm solid #737373;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 2.4mm;
            background: #dcdcdc;
            overflow: hidden;
        }

        .logo-image {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
            background: #ffffff;
        }

        .logo-inner {
            width: 11.2mm;
            height: 11.2mm;
            border: 0.55mm solid #646464;
            border-radius: 2.4mm;
            text-transform: lowercase;
            font-size: 7.3mm;
            line-height: 9.8mm;
            text-align: center;
            font-weight: 700;
            color: #5f5f5f;
            padding-right: 0.35mm;
        }

        .brand-text {
            flex: 1;
        }

        .brand-line1 {
            font-size: 2.55mm;
            text-align: center;
            font-weight: 700;
            margin-top: -0.1mm;
            margin-bottom: 0.25mm;
        }

        .brand-line2 {
            font-size: 9.05mm;
            text-align: center;
            line-height: 7.5mm;
            letter-spacing: 0.1mm;
            font-weight: 700;
            margin-bottom: 0.2mm;
        }

        .brand-line3 {
            font-size: 3.25mm;
            text-align: center;
            letter-spacing: 2.05mm;
            font-weight: 700;
            margin-bottom: 0.25mm;
        }

        .brand-line4 {
            display: flex;
            justify-content: space-between;
            padding: 0 3.8mm;
            font-size: 2.8mm;
            font-style: italic;
            color: #525252;
        }

        .address-strip {
            margin-top: 0.95mm;
            background: #d7d7d7;
            text-align: center;
            font-size: 2.72mm;
            font-weight: 700;
            padding: 0.62mm 1.2mm 0.68mm 1.2mm;
            line-height: 1.1;
        }

        .meta-row {
            margin-top: 2.3mm;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .meta-cell {
            display: flex;
            align-items: center;
            min-width: 58mm;
            font-size: 3.28mm;
            font-weight: 700;
        }

        .meta-cell.meta-date {
            justify-content: flex-end;
            min-width: 61mm;
        }

        .meta-label {
            margin-right: 1.05mm;
            white-space: nowrap;
        }

        .char-set {
            display: inline-flex;
            align-items: center;
            line-height: 1;
            white-space: nowrap;
        }

        .char-box {
            width: 4.95mm;
            height: 5.15mm;
            border: 0.2mm solid #777777;
            margin-right: -0.2mm;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 3.25mm;
            font-weight: 500;
        }

        input.char-box {
            -webkit-appearance: none;
            appearance: none;
            background: #ffffff;
            outline: none;
            border-radius: 0;
            padding: 0;
            margin: 0 -0.2mm 0 0;
            text-align: center;
            font-family: "Times New Roman", Times, serif;
            text-transform: uppercase;
        }

        input.char-box:focus {
            outline: 0.28mm solid #6d7782;
            outline-offset: -0.28mm;
            position: relative;
            z-index: 2;
        }

        .char-box.small {
            width: 4.3mm;
        }

        .char-box.phone {
            width: 5.2mm;
            height: 5.3mm;
        }

        .char-box.dob {
            width: 4.65mm;
            height: 5.15mm;
        }

        .char-gap {
            display: inline-block;
            width: 1.75mm;
        }

        .char-slash {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 1.8mm;
            font-size: 3.4mm;
            font-weight: 700;
            color: #565656;
        }

        .enquiry-pill {
            min-width: 33.8mm;
            height: 7.2mm;
            border-radius: 2.2mm;
            border: 0.2mm solid #636363;
            background: #6d7782;
            color: #ffffff;
            font-size: 3.62mm;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            letter-spacing: 0.15mm;
        }

        .branch-row {
            margin-top: 1.85mm;
            font-size: 3.35mm;
            font-weight: 700;
        }

        .branch-value {
            font-weight: 700;
            margin-left: 1.3mm;
            letter-spacing: 0.05mm;
        }

        .form-lines {
            margin-top: 1.7mm;
            padding-bottom: 23.8mm;
        }

        .line-row {
            display: flex;
            align-items: center;
            margin-top: 1.42mm;
            line-height: 1.04;
            font-size: 3.34mm;
        }

        .line-row.tight {
            margin-top: 1.25mm;
        }

        .bullet {
            width: 2.1mm;
            height: 2.1mm;
            border: 0.2mm solid #8a8a8a;
            margin-right: 2mm;
            flex: 0 0 auto;
        }

        .row-strong {
            font-weight: 700;
        }

        .line-field {
            display: inline-block;
            border-bottom: 0.2mm solid #767676;
            height: 3.8mm;
            vertical-align: bottom;
            margin: 0 1.15mm 0 0.95mm;
            line-height: 3.55mm;
            overflow: hidden;
            white-space: nowrap;
        }

        .line-input {
            width: 100%;
            height: 100%;
            border: 0;
            padding: 0 0.75mm;
            margin: 0;
            background: transparent;
            outline: none;
            font-family: "Times New Roman", Times, serif;
            font-size: inherit;
            line-height: 3.55mm;
            color: #2d2d2d;
        }

        .line-input:focus {
            background: rgba(109, 119, 130, 0.08);
        }

        .name-input {
            text-align: center;
            padding: 0;
        }

        .w-17 {
            width: 17mm;
        }

        .w-24 {
            width: 24mm;
        }

        .w-28 {
            width: 28mm;
        }

        .w-33 {
            width: 33mm;
        }

        .w-36 {
            width: 36mm;
        }

        .w-45 {
            width: 45mm;
        }

        .w-58 {
            width: 58mm;
        }

        .w-84 {
            width: 84mm;
        }

        .w-103 {
            width: 103mm;
        }

        .name-section {
            margin-top: 1.05mm;
            margin-left: 4.05mm;
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
        }

        .name-col {
            width: 56mm;
        }

        .name-col .line-field {
            margin: 0;
            width: 55.5mm;
            height: 4.05mm;
        }

        .name-caption {
            text-align: center;
            font-size: 2.95mm;
            margin-top: 0.48mm;
            color: #595959;
        }

        .option-group {
            display: inline-flex;
            align-items: center;
            white-space: nowrap;
            margin-left: 2.6mm;
        }

        .option-group.tight {
            margin-left: 1.7mm;
        }

        .box-check {
            width: 4.45mm;
            height: 4.2mm;
            border: 0.2mm solid #7d7d7d;
            display: inline-block;
            position: relative;
            margin-left: 0.95mm;
            vertical-align: middle;
        }

        input.box-check,
        input.big-check,
        input.notice-check {
            -webkit-appearance: none;
            appearance: none;
            background: #ffffff;
            border-radius: 0;
            cursor: pointer;
            outline: none;
        }

        input.box-check:focus-visible,
        input.big-check:focus-visible,
        input.notice-check:focus-visible {
            outline: 0.28mm solid #6d7782;
            outline-offset: 0.15mm;
        }

        .box-check.checked::after,
        .box-check:checked::after {
            content: "";
            position: absolute;
            left: 1.05mm;
            top: 0.32mm;
            width: 1.65mm;
            height: 2.95mm;
            border: 0.35mm solid #2f2f2f;
            border-top: 0;
            border-left: 0;
            transform: rotate(45deg);
        }

        .phone-set {
            display: inline-flex;
            margin-left: 1.1mm;
        }

        .indented {
            margin-left: 4.12mm;
        }

        .remarks-line {
            margin-left: 0.9mm;
            width: 64mm;
        }

        .signatures {
            position: absolute;
            left: 10.5mm;
            right: 10.5mm;
            bottom: 7.4mm;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }

        .signature-cell {
            width: 56mm;
            text-align: center;
            border-top: 0.2mm solid #7a7a7a;
            padding-top: 1.4mm;
            font-size: 3.2mm;
            font-weight: 700;
        }

        .counselling-title {
            width: 51mm;
            margin: 0 auto 2.2mm auto;
            border: 0.2mm solid #7b7b7b;
            border-radius: 3mm;
            text-align: center;
            font-size: 7mm;
            font-weight: 500;
            line-height: 8.8mm;
            height: 9.2mm;
            letter-spacing: 0.12mm;
        }

        .counselling-box {
            border: 0.2mm solid #7f7f7f;
            height: 199.6mm;
            display: flex;
        }

        .counselling-left {
            width: 52.15%;
            border-right: 0.2mm solid #7f7f7f;
            padding: 3.1mm 3.8mm 2.8mm 4.2mm;
        }

        .left-ribbon {
            width: 97.4%;
            background: #595f68;
            color: #ffffff;
            font-size: 5.15mm;
            font-weight: 700;
            line-height: 8.35mm;
            height: 8.65mm;
            text-align: center;
            transform: skewX(-10deg);
            margin-bottom: 2.15mm;
            margin-left: 1.1mm;
            letter-spacing: 0.02mm;
            white-space: nowrap;
            padding: 0 2.25mm;
        }

        .left-ribbon span {
            display: block;
            transform: skewX(10deg);
        }

        .discussion-list {
            margin-top: 0.9mm;
        }

        .discussion-row {
            display: flex;
            align-items: center;
            margin-bottom: 1.18mm;
            line-height: 1.09;
            font-size: 3.97mm;
            color: #333333;
        }

        .big-check {
            width: 6.9mm;
            height: 5.6mm;
            border: 0.2mm solid #808080;
            margin-right: 3.45mm;
            position: relative;
            flex: 0 0 auto;
            background: #ffffff;
        }

        .big-check.checked::after,
        .big-check:checked::after {
            content: "";
            position: absolute;
            left: 1.62mm;
            top: 0.55mm;
            width: 2.2mm;
            height: 3.85mm;
            border: 0.45mm solid #2f2f2f;
            border-top: 0;
            border-left: 0;
            transform: rotate(45deg);
        }

        .counselling-right {
            width: 47.85%;
            padding: 4.1mm 4mm 3.2mm 5mm;
        }

        .feedback-title {
            font-size: 6.3mm;
            line-height: 1.03;
            font-weight: 700;
            margin-bottom: 2.2mm;
        }

        .feedback-content {
            width: 100%;
            height: 185mm;
            white-space: pre-line;
            font-size: 4.05mm;
            line-height: 1.2;
        }

        .feedback-input {
            width: 100%;
            height: 185mm;
            border: 0;
            padding: 0;
            margin: 0;
            background: transparent;
            resize: none;
            outline: none;
            font-family: "Times New Roman", Times, serif;
            font-size: 4.05mm;
            line-height: 1.2;
            color: #2d2d2d;
        }

        .important-title {
            margin-top: 2.7mm;
            font-size: 9.1mm;
            line-height: 1.03;
            font-weight: 700;
        }

        .notice-list {
            margin-top: 1.35mm;
        }

        .notice-row {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.52mm;
            font-size: 3.75mm;
            line-height: 1.2;
        }

        .notice-check {
            width: 6.5mm;
            height: 5.4mm;
            border: 0.2mm solid #7f7f7f;
            margin-right: 3.4mm;
            position: relative;
            flex: 0 0 auto;
            margin-top: 0.2mm;
        }

        .notice-check.checked::after,
        .notice-check:checked::after {
            content: "";
            position: absolute;
            left: 1.48mm;
            top: 0.48mm;
            width: 2.05mm;
            height: 3.5mm;
            border: 0.42mm solid #2f2f2f;
            border-top: 0;
            border-left: 0;
            transform: rotate(45deg);
        }

        .screen-actions {
            width: 210mm;
            margin: 2.6mm auto 4mm auto;
            display: flex;
            justify-content: flex-end;
            gap: 2mm;
        }

        .screen-actions button {
            border: 0.2mm solid #6f6f6f;
            background: #ffffff;
            font-family: "Times New Roman", Times, serif;
            font-size: 4mm;
            line-height: 1;
            padding: 2mm 5mm;
            cursor: pointer;
        }

        @media print {
            html,
            body {
                margin: 0 !important;
                padding: 0 !important;
                width: 210mm;
                background: #ffffff;
            }

            .sheet {
                margin: 0;
                width: 210mm;
            }

            .page {
                margin: 0;
                page-break-inside: avoid;
                break-inside: avoid;
            }

            .screen-actions {
                display: none !important;
            }
        }
    </style>
</head>
<body>
@php
    $form = $form ?? ($data ?? []);
    $checks = is_array($form['checks'] ?? null) ? $form['checks'] : [];
    $counsellingChecks = is_array($form['counselling_checks'] ?? null) ? $form['counselling_checks'] : [];
    $noticeChecks = is_array($form['notice_checks'] ?? null) ? $form['notice_checks'] : [];
    $logoSrc = old('logo_src', $form['logo_src'] ?? ($logoSrc ?? ''));
    $formAction = $formAction ?? ($action ?? url()->current());
    $formMethod = strtoupper($formMethod ?? ($method ?? 'POST'));
    $siblings = array_values($form['siblings'] ?? []);
    $references = array_values($form['references'] ?? []);

    $defaultRelationRows = [
        ['name' => '', 'class' => '', 'medium' => ''],
        ['name' => '', 'class' => '', 'medium' => ''],
    ];

    $siblings = array_replace($defaultRelationRows, $siblings);
    $references = array_replace($defaultRelationRows, $references);

    $digits = function ($value) {
        return preg_replace('/\D+/', '', (string) $value);
    };

    $chars = function ($value, $length) {
        $value = (string) $value;
        $split = preg_split('//u', $value, -1, PREG_SPLIT_NO_EMPTY);
        $split = $split === false ? [] : $split;
        return array_pad(array_slice($split, 0, $length), $length, '');
    };

    $digitChars = function ($value, $length) use ($digits) {
        $onlyDigits = substr($digits($value), 0, $length);
        return array_pad(str_split($onlyDigits), $length, '');
    };

    $lineValue = function ($key, $default = '') use ($form) {
        return old($key, data_get($form, $key, $default));
    };

    $checksInput = old('checks');
    $checksInput = is_array($checksInput) ? $checksInput : $checks;
    $isChecked = function ($key, $fallback = false) use ($checksInput) {
        return !empty($checksInput[$key]) || $fallback;
    };

    $counsellingInput = old('counselling_checks');
    $counsellingInput = is_array($counsellingInput) ? $counsellingInput : $counsellingChecks;
    $isCounsellingChecked = function ($key) use ($counsellingInput) {
        return !empty($counsellingInput[$key]);
    };

    $noticeInput = old('notice_checks');
    $noticeInput = is_array($noticeInput) ? $noticeInput : $noticeChecks;
    $isNoticeChecked = function ($key) use ($noticeInput) {
        return !empty($noticeInput[$key]);
    };

    $charArray = function ($oldKey, $sourceValue, $length, $digitsOnly = false) use ($chars, $digitChars) {
        $oldChars = old($oldKey);

        if (is_array($oldChars)) {
            $normalized = [];
            foreach ($oldChars as $char) {
                $single = substr((string) $char, 0, 1);
                if ($digitsOnly) {
                    $single = preg_replace('/\D+/', '', $single);
                }
                $normalized[] = $single;
            }

            return array_pad(array_slice($normalized, 0, $length), $length, '');
        }

        return $digitsOnly ? $digitChars($sourceValue, $length) : $chars($sourceValue, $length);
    };

    $enquiryChars = $charArray('enquiry_no_chars', $form['enquiry_no'] ?? '', 6);
    $dateChars = $charArray('date_chars', $form['date'] ?? '', 8, true);
    $dobChars = $charArray('dob_chars', $form['dob'] ?? '', 8, true);
    $parentChars = $charArray('parent_mobile_chars', $form['parent_mobile'] ?? '', 10, true);
    $studentChars = $charArray('student_mobile_chars', $form['student_mobile'] ?? '', 10, true);
    $whatsappChars = $charArray('whatsapp_mobile_chars', $form['whatsapp_mobile'] ?? '', 10, true);

    $discussionItems = [
        ['key' => 'welcome', 'label' => 'Welcome To Parents And Students'],
        ['key' => 'introduce', 'label' => "Introduce Yourself And Bansal's History"],
        ['key' => 'ask_std', 'label' => 'Ask Std And Brief'],
        ['key' => 'needs', 'label' => 'Needs Of Classes For Particular Std'],
        ['key' => 'why_bansal', 'label' => 'Why Bansal Is Best ?'],
        ['key' => 'syllabus', 'label' => 'Syllabus/academic Planner :'],
        ['key' => 'faculty', 'label' => 'Faculty Team :'],
        ['key' => 'day_care', 'label' => 'Day Care Schedule :'],
        ['key' => 'double_session', 'label' => 'Double Session :'],
        ['key' => 'dpp_modules', 'label' => 'Dppp,modules :'],
        ['key' => 'study_material', 'label' => 'Study Materials, Bag, T-shirt :'],
        ['key' => 'fortnightly', 'label' => 'Fortnightly Test (15 Days ) :'],
        ['key' => 'subjective', 'label' => 'Subjective Test :'],
        ['key' => 'major_test', 'label' => 'Major Test :'],
        ['key' => 'result', 'label' => 'Result :'],
        ['key' => 'classroom', 'label' => 'Class Room & Infrastructure :'],
        ['key' => 'ptm', 'label' => 'Parents Teacher Meeting :'],
        ['key' => 'amenities', 'label' => 'Amenities :'],
        ['key' => 'security', 'label' => 'Security :'],
        ['key' => 'cctv', 'label' => 'Cctv :'],
        ['key' => 'gate_pass', 'label' => 'Gate Pass :'],
        ['key' => 'girls_coordinator', 'label' => 'Batch Coordinator For Girls :'],
        ['key' => 'fees', 'label' => 'Fees :'],
        ['key' => 'total_fees', 'label' => 'Total Fees :'],
        ['key' => 'discount_fees', 'label' => 'Discount Fees :'],
        ['key' => 'final_fees', 'label' => 'Final Fees :'],
    ];

    $notices = [
        'सर्व अँडमिशनसाठी 30% (स्टडी मटेरियल फीस) व 100% (ट्युशन फीस) फी पेडत लागू होईल.',
        'सर्व अॅडमिशनसाठी किमान 25% डिस्काउंट फी पेडत (90% फीस) (ट्युशन फीस) भरावी लागू होईल.',
        'उर्वरित 30% फीस (स्टडी मटेरियल फीस) बाकी कोणत्याही कॉन्ट्रिब्युशन/डिस्काउंट लागू होणार नाही.',
        'ठरलेल्या फीसपेक्षा किमान कमी 15% फीस भरल्यानंतर विद्यार्थ्यांना वर्गामध्ये बसण्यास परवानगी असेल.',
        'पाचवी ते दहावीतील विद्यार्थ्यांना अॅडमिशनसाठी वेळीच 30% फीस (स्टडी मटेरियल फीस) भरावी लागेल.',
        'एखादा विद्यार्थ्यांनी 50% पेक्षा जास्त स्कॉलरशिप घेतल्यास रिजनल ऑफिसची परवानगी बंधनकारक असेल.',
        '(11वी व 12 वी +जेईई 2-years) या दोन वर्षांकरिता प्रवेश घेताना एकूण दोन्ही वर्षांच्या फीच्या 15% रक्कम भरणे बंधनकारक असेल.',
    ];
@endphp
<form action="{{ $formAction }}" method="{{ $formMethod === 'GET' ? 'GET' : 'POST' }}" autocomplete="off">
    @if ($formMethod !== 'GET')
        @csrf
    @endif
    @if (!in_array($formMethod, ['GET', 'POST'], true))
        @method($formMethod)
    @endif

    <div class="sheet">
        <section class="page page-one">
            <div class="brand-box">
                <div class="brand-main-row">
                    <div class="logo-square">
                        @if (!empty($logoSrc))
                            <img src="{{ $logoSrc }}" alt="Bansal Classes Logo" class="logo-image">
                        @else
                            <div class="logo-inner">b</div>
                        @endif
                    </div>
                    <div class="brand-text">
                        <div class="brand-line1">Rajasthan Kota's Pioneer Brand of India</div>
                        <div class="brand-line2">BANSAL CLASSES</div>
                        <div class="brand-line3">PRIVATE LIMITED</div>
                        <div class="brand-line4">
                            <span>Since : 1981</span>
                            <span>Ideal for Scholars</span>
                        </div>
                    </div>
                </div>
                <div class="address-strip">BCPL, 2<sup>nd</sup> Floor, B. B. Ingle Plaza, Nanded-city, Pune. Mob. 8087758574, 9209936534</div>
            </div>

            <div class="meta-row">
                <div class="meta-cell">
                    <span class="meta-label">Enq No :</span>
                    <span class="char-set">
                        @foreach ($enquiryChars as $index => $char)
                            <input type="text" name="enquiry_no_chars[]" value="{{ $char }}" maxlength="1" class="char-box" data-group="enquiry" autocomplete="off">
                        @endforeach
                    </span>
                </div>
                <div class="enquiry-pill">ENQUIRY FORM</div>
                <div class="meta-cell meta-date">
                    <span class="meta-label">Date :</span>
                    <span class="char-set">
                        @foreach ($dateChars as $index => $char)
                            <input type="text" name="date_chars[]" value="{{ $char }}" maxlength="1" class="char-box small" data-group="date" data-digits="1" inputmode="numeric" autocomplete="off">
                            @if ($index === 1 || $index === 3)
                                <span class="char-slash">/</span>
                            @endif
                        @endforeach
                    </span>
                </div>
            </div>

            <div class="branch-row">
                <span class="meta-label">Branch code :</span>
                <span class="branch-value">
                    <input type="text" name="branch_code" value="{{ $lineValue('branch_code', 'BCPL-ND-CY') }}" class="line-input" style="display:inline-block;width:31mm;height:4.1mm;padding:0;">
                </span>
            </div>

            <div class="form-lines">
                <div class="line-row">
                    <span class="bullet"></span>
                    <span class="row-strong">Full Name of the applicant</span>
                </div>

                <div class="name-section">
                    <div class="name-col">
                        <span class="line-field"><input type="text" name="first_name" value="{{ $lineValue('first_name') }}" class="line-input name-input"></span>
                        <div class="name-caption">First Name</div>
                    </div>
                    <div class="name-col">
                        <span class="line-field"><input type="text" name="middle_name" value="{{ $lineValue('middle_name') }}" class="line-input name-input"></span>
                        <div class="name-caption">Middle Name</div>
                    </div>
                    <div class="name-col">
                        <span class="line-field"><input type="text" name="surname" value="{{ $lineValue('surname') }}" class="line-input name-input"></span>
                        <div class="name-caption">Surname</div>
                    </div>
                </div>

                <div class="line-row tight">
                    <span class="bullet"></span>
                    <span>Class:</span>
                    <span class="line-field w-24"><input type="text" name="class" value="{{ $lineValue('class') }}" class="line-input"></span>
                    <span>College/School Time :</span>
                    <span class="line-field w-45"><input type="text" name="college_time" value="{{ $lineValue('college_time') }}" class="line-input"></span>
                    <span>Last Year % :</span>
                    <span class="line-field w-17"><input type="text" name="last_year_percentage" value="{{ $lineValue('last_year_percentage') }}" class="line-input"></span>
                </div>

                <div class="line-row tight">
                    <span class="bullet"></span>
                    <span>College/School Name :</span>
                    <span class="line-field w-103"><input type="text" name="college_name" value="{{ $lineValue('college_name') }}" class="line-input"></span>
                </div>

                <div class="line-row tight">
                    <span class="bullet"></span>
                    <span>Medium :</span>
                    <span class="option-group">Semi Medium <input type="checkbox" name="checks[semi_medium]" value="1" class="box-check" {{ $isChecked('semi_medium', ($lineValue('medium') === 'semi_medium')) ? 'checked' : '' }}></span>
                    <span class="option-group">English Medium <input type="checkbox" name="checks[english_medium]" value="1" class="box-check" {{ $isChecked('english_medium', ($lineValue('medium') === 'english_medium')) ? 'checked' : '' }}></span>
                    <span class="option-group tight">CBSE <input type="checkbox" name="checks[cbse]" value="1" class="box-check" {{ $isChecked('cbse', ($lineValue('board') === 'cbse')) ? 'checked' : '' }}></span>
                    <span class="option-group tight">ICSE <input type="checkbox" name="checks[icse]" value="1" class="box-check" {{ $isChecked('icse', ($lineValue('board') === 'icse')) ? 'checked' : '' }}></span>
                </div>

                <div class="line-row tight">
                    <span class="bullet"></span>
                    <span>Date Of Birth</span>
                    <span style="margin-left: 1.05mm;">:</span>
                    <span class="char-set" style="margin-left: 1.2mm;">
                        @foreach ($dobChars as $index => $char)
                            <input type="text" name="dob_chars[]" value="{{ $char }}" maxlength="1" class="char-box dob" data-group="dob" data-digits="1" inputmode="numeric" autocomplete="off">
                            @if ($index === 1 || $index === 3)
                                <span class="char-gap"></span>
                            @endif
                        @endforeach
                    </span>
                </div>

                <div class="line-row tight">
                    <span class="bullet"></span>
                    <span>Mobile No (Parent's)</span>
                    <span style="margin-left: 0.95mm;">:</span>
                    <span class="phone-set">
                        @foreach ($parentChars as $char)
                            <input type="text" name="parent_mobile_chars[]" value="{{ $char }}" maxlength="1" class="char-box phone" data-group="parent_mobile" data-digits="1" inputmode="numeric" autocomplete="off">
                        @endforeach
                    </span>
                </div>

                <div class="line-row tight">
                    <span class="bullet"></span>
                    <span>Mobile No (Student's)</span>
                    <span style="margin-left: 0.95mm;">:</span>
                    <span class="phone-set">
                        @foreach ($studentChars as $char)
                            <input type="text" name="student_mobile_chars[]" value="{{ $char }}" maxlength="1" class="char-box phone" data-group="student_mobile" data-digits="1" inputmode="numeric" autocomplete="off">
                        @endforeach
                    </span>
                </div>

                <div class="line-row tight">
                    <span class="bullet"></span>
                    <span>Whatsapp No</span>
                    <span style="margin-left: 4.35mm;">:</span>
                    <span class="phone-set">
                        @foreach ($whatsappChars as $char)
                            <input type="text" name="whatsapp_mobile_chars[]" value="{{ $char }}" maxlength="1" class="char-box phone" data-group="whatsapp_mobile" data-digits="1" inputmode="numeric" autocomplete="off">
                        @endforeach
                    </span>
                </div>

                <div class="line-row tight">
                    <span class="bullet"></span>
                    <span>Father's Occupation :</span>
                    <span class="line-field w-103"><input type="text" name="father_occupation" value="{{ $lineValue('father_occupation') }}" class="line-input"></span>
                </div>

                <div class="line-row tight">
                    <span class="bullet"></span>
                    <span>Add :</span>
                    <span class="line-field w-103"><input type="text" name="address_line_1" value="{{ $lineValue('address_line_1') }}" class="line-input"></span>
                </div>

                <div class="line-row tight indented">
                    <span class="line-field w-103"><input type="text" name="address_line_2" value="{{ $lineValue('address_line_2') }}" class="line-input"></span>
                </div>

                <div class="line-row" style="margin-top: 3.3mm;">
                    <span class="bullet"></span>
                    <span><strong>Foundation :</strong></span>
                    <span class="option-group">Scholarship <input type="checkbox" name="checks[scholarship]" value="1" class="box-check" {{ $isChecked('scholarship') ? 'checked' : '' }}></span>
                    <span class="option-group">Dr. Homibhabha <input type="checkbox" name="checks[dr_homibhabha]" value="1" class="box-check" {{ $isChecked('dr_homibhabha') ? 'checked' : '' }}></span>
                    <span class="option-group">Olympaid <input type="checkbox" name="checks[olympaid]" value="1" class="box-check" {{ $isChecked('olympaid') ? 'checked' : '' }}></span>
                    <span class="option-group">MTSE <input type="checkbox" name="checks[mtse]" value="1" class="box-check" {{ $isChecked('mtse') ? 'checked' : '' }}></span>
                </div>

                <div class="line-row tight">
                    <span class="bullet"></span>
                    <span>MIIT</span>
                    <input type="checkbox" name="checks[miit]" value="1" class="box-check" {{ $isChecked('miit') ? 'checked' : '' }}>
                    <span style="margin-left: 1.55mm;">NEET</span>
                    <input type="checkbox" name="checks[neet]" value="1" class="box-check" {{ $isChecked('neet') ? 'checked' : '' }}>
                    <span style="margin-left: 1.55mm;">JEE</span>
                    <input type="checkbox" name="checks[jee]" value="1" class="box-check" {{ $isChecked('jee') ? 'checked' : '' }}>
                    <span style="margin-left: 1.55mm;">MHT-CET</span>
                    <input type="checkbox" name="checks[mht_cet]" value="1" class="box-check" {{ $isChecked('mht_cet') ? 'checked' : '' }}>
                    <span style="margin-left: 1.55mm;">REPT</span>
                    <input type="checkbox" name="checks[rept]" value="1" class="box-check" {{ $isChecked('rept') ? 'checked' : '' }}>
                    <span style="margin-left: 1.55mm;">TEST SERIES</span>
                    <input type="checkbox" name="checks[test_series]" value="1" class="box-check" {{ $isChecked('test_series') ? 'checked' : '' }}>
                    <span style="margin-left: 1.55mm;">CRASH C.</span>
                    <input type="checkbox" name="checks[crash_course]" value="1" class="box-check" {{ $isChecked('crash_course') ? 'checked' : '' }}>
                </div>

                <div class="line-row" style="margin-top: 2.2mm;">
                    <span class="bullet"></span>
                    <span><strong>Sibling</strong></span>
                    <span style="margin-left: 1.3mm;">1) :</span>
                    <span class="line-field w-58"><input type="text" name="siblings[0][name]" value="{{ old('siblings.0.name', $siblings[0]['name'] ?? '') }}" class="line-input"></span>
                    <span>Class</span>
                    <span class="line-field w-17"><input type="text" name="siblings[0][class]" value="{{ old('siblings.0.class', $siblings[0]['class'] ?? '') }}" class="line-input"></span>
                    <span>Medium</span>
                    <span class="line-field w-17"><input type="text" name="siblings[0][medium]" value="{{ old('siblings.0.medium', $siblings[0]['medium'] ?? '') }}" class="line-input"></span>
                </div>

                <div class="line-row tight indented">
                    <span>2) :</span>
                    <span class="line-field w-58"><input type="text" name="siblings[1][name]" value="{{ old('siblings.1.name', $siblings[1]['name'] ?? '') }}" class="line-input"></span>
                    <span>Class</span>
                    <span class="line-field w-17"><input type="text" name="siblings[1][class]" value="{{ old('siblings.1.class', $siblings[1]['class'] ?? '') }}" class="line-input"></span>
                    <span>Medium</span>
                    <span class="line-field w-17"><input type="text" name="siblings[1][medium]" value="{{ old('siblings.1.medium', $siblings[1]['medium'] ?? '') }}" class="line-input"></span>
                </div>

                <div class="line-row" style="margin-top: 1.9mm;">
                    <span class="bullet"></span>
                    <span><strong>Reference</strong></span>
                    <span style="margin-left: 1.15mm;">1) :</span>
                    <span class="line-field w-58"><input type="text" name="references[0][name]" value="{{ old('references.0.name', $references[0]['name'] ?? '') }}" class="line-input"></span>
                    <span>Class</span>
                    <span class="line-field w-17"><input type="text" name="references[0][class]" value="{{ old('references.0.class', $references[0]['class'] ?? '') }}" class="line-input"></span>
                    <span>Medium</span>
                    <span class="line-field w-17"><input type="text" name="references[0][medium]" value="{{ old('references.0.medium', $references[0]['medium'] ?? '') }}" class="line-input"></span>
                </div>

                <div class="line-row tight indented">
                    <span class="line-field w-58"><input type="text" name="references[1][name]" value="{{ old('references.1.name', $references[1]['name'] ?? '') }}" class="line-input"></span>
                    <span>Class</span>
                    <span class="line-field w-17"><input type="text" name="references[1][class]" value="{{ old('references.1.class', $references[1]['class'] ?? '') }}" class="line-input"></span>
                    <span>Medium</span>
                    <span class="line-field w-17"><input type="text" name="references[1][medium]" value="{{ old('references.1.medium', $references[1]['medium'] ?? '') }}" class="line-input"></span>
                </div>

                <div class="line-row" style="margin-top: 2.1mm;">
                    <span class="bullet"></span>
                    <span><strong>How do you about us</strong></span>
                </div>

                <div class="line-row tight indented">
                    <span>Boost/TSE Exam</span>
                    <input type="checkbox" name="checks[boost_tse_exam]" value="1" class="box-check" {{ $isChecked('boost_tse_exam') ? 'checked' : '' }}>
                    <span style="margin-left: 2.05mm;">Paper Advt</span>
                    <input type="checkbox" name="checks[paper_advt]" value="1" class="box-check" {{ $isChecked('paper_advt') ? 'checked' : '' }}>
                    <span style="margin-left: 2.05mm;">TV Advt</span>
                    <input type="checkbox" name="checks[tv_advt]" value="1" class="box-check" {{ $isChecked('tv_advt') ? 'checked' : '' }}>
                    <span style="margin-left: 2.05mm;">Student's Ref</span>
                    <input type="checkbox" name="checks[students_ref]" value="1" class="box-check" {{ $isChecked('students_ref') ? 'checked' : '' }}>
                    <span style="margin-left: 2.05mm;">Employee Ref</span>
                    <input type="checkbox" name="checks[employee_ref]" value="1" class="box-check" {{ $isChecked('employee_ref') ? 'checked' : '' }}>
                    <span style="margin-left: 2.05mm;">Other Ref</span>
                    <input type="checkbox" name="checks[other_ref]" value="1" class="box-check" {{ $isChecked('other_ref') ? 'checked' : '' }}>
                </div>

                <div class="line-row" style="margin-top: 2.15mm;">
                    <span class="bullet"></span>
                    <span><strong>Remarks</strong></span>
                    <span style="margin-left: 2.25mm;">Hot</span>
                    <input type="checkbox" name="checks[hot]" value="1" class="box-check" {{ $isChecked('hot') ? 'checked' : '' }}>
                    <span style="margin-left: 2.2mm;">Warm</span>
                    <input type="checkbox" name="checks[warm]" value="1" class="box-check" {{ $isChecked('warm') ? 'checked' : '' }}>
                    <span style="margin-left: 2.2mm;">Cold</span>
                    <input type="checkbox" name="checks[cold]" value="1" class="box-check" {{ $isChecked('cold') ? 'checked' : '' }}>
                    <span class="line-field remarks-line"><input type="text" name="remarks" value="{{ $lineValue('remarks') }}" class="line-input"></span>
                </div>
            </div>

            <div class="signatures">
                <div class="signature-cell">Parent's Sign</div>
                <div class="signature-cell">Student's Sign</div>
                <div class="signature-cell">Counsellor Name &amp; Sign</div>
            </div>
        </section>

        <section class="page page-two">
            <div class="counselling-title">COUNSELLING</div>

            <div class="counselling-box">
                <div class="counselling-left">
                    <div class="left-ribbon"><span>Points to be discussed/done</span></div>
                    <div class="discussion-list">
                        @foreach ($discussionItems as $item)
                            <div class="discussion-row">
                                <input type="checkbox" name="counselling_checks[{{ $item['key'] }}]" value="1" class="big-check" {{ $isCounsellingChecked($item['key']) ? 'checked' : '' }}>
                                <span>{{ $item['label'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="counselling-right">
                    <div class="feedback-title">Parent's Feedback /<br>conversation</div>
                    <textarea name="parent_feedback" class="feedback-input">{{ $lineValue('parent_feedback') }}</textarea>
                </div>
            </div>

            <div class="important-title">महत्वाच्या सूचना :-</div>
            <div class="notice-list">
                @foreach ($notices as $index => $notice)
                    <div class="notice-row">
                        <input type="checkbox" name="notice_checks[{{ $index }}]" value="1" class="notice-check" {{ $isNoticeChecked($index) ? 'checked' : '' }}>
                        <span>{{ $notice }}</span>
                    </div>
                @endforeach
            </div>
        </section>
    </div>

    <div class="screen-actions">
        <button type="submit">Save Form</button>
        <button type="button" onclick="window.print()">Print</button>
    </div>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const charInputs = Array.from(document.querySelectorAll('input.char-box'));

        charInputs.forEach(function (input, index) {
            input.addEventListener('input', function () {
                let value = this.value || '';
                value = value.slice(-1);

                if (this.dataset.digits === '1') {
                    value = value.replace(/[^0-9]/g, '');
                }

                this.value = value.toUpperCase();

                if (this.value) {
                    const next = charInputs[index + 1];
                    if (next && next.dataset.group === this.dataset.group) {
                        next.focus();
                        next.select();
                    }
                }
            });

            input.addEventListener('keydown', function (event) {
                if (event.key === 'Backspace' && !this.value) {
                    const prev = charInputs[index - 1];
                    if (prev && prev.dataset.group === this.dataset.group) {
                        prev.focus();
                    }
                }

                if (event.key === 'ArrowLeft') {
                    const prev = charInputs[index - 1];
                    if (prev && prev.dataset.group === this.dataset.group) {
                        prev.focus();
                        event.preventDefault();
                    }
                }

                if (event.key === 'ArrowRight') {
                    const next = charInputs[index + 1];
                    if (next && next.dataset.group === this.dataset.group) {
                        next.focus();
                        event.preventDefault();
                    }
                }
            });
        });
    });
</script>
</body>
</html>
