<!DOCTYPE html>
<html>
<head>
    <title>Payment Receipt</title>

    <style>
        body{
            margin:0;
            padding:20px;
            background:#f1f1f1;
            font-family:'Courier New', monospace;
        }

        .receipt{
            width:320px;
            margin:0 auto;
            background:#fff;
            padding:18px;
            color:#000;
            box-shadow:0 10px 30px rgba(0,0,0,.15);
        }

        .center{
            text-align:center;
        }

        .clinic-name{
            font-size:28px;
            font-weight:bold;
            letter-spacing:2px;
        }

        .tagline{
            font-size:13px;
            margin-top:4px;
        }

        .line{
            border-top:2px dashed #000;
            margin:14px 0;
        }

        .title{
            font-size:20px;
            font-weight:bold;
            letter-spacing:2px;
        }

        .row{
            display:flex;
            justify-content:space-between;
            gap:10px;
            font-size:14px;
            margin:8px 0;
        }

        .label{
            font-weight:bold;
        }

        .value{
            text-align:right;
            max-width:160px;
            word-wrap:break-word;
        }

        .amount{
            font-size:20px;
            font-weight:bold;
        }

        .department{
            font-size:18px;
            font-weight:bold;
            text-transform:uppercase;
        }

        .note{
            font-size:14px;
            line-height:1.4;
            margin-top:8px;
        }

        .barcode{
            text-align:center;
            font-size:34px;
            letter-spacing:2px;
            margin-top:10px;
            transform:scaleY(1.6);
        }

        .barcode-text{
            text-align:center;
            font-size:13px;
            margin-top:10px;
        }

        .signature{
            margin-top:25px;
            text-align:center;
            font-size:14px;
        }

        .signature-line{
            border-top:1px solid #000;
            width:220px;
            margin:25px auto 8px;
        }

        .print-btn{
            display:block;
            margin:0 auto 20px;
            padding:8px 15px;
            cursor:pointer;
        }

        @media print{
            body{
                background:#fff;
                padding:0;
            }

            .print-btn{
                display:none;
            }

            .receipt{
                width:80mm;
                margin:0;
                box-shadow:none;
                padding:10px;
            }

            @page{
                size:80mm auto;
                margin:0;
            }
        }
    </style>
</head>
<body>

    <button onclick="window.print()" class="print-btn">
        Print Receipt
    </button>

    <div class="receipt">

        <div class="center receipt-brand">
            <img src="{{ asset('images/logo.png') }}"
                alt="SmartClinic Logo"
                width="55">

            <div class="clinic-name">
                SMARTCLINIC
            </div>

            <div class="tagline">
                Healthcare You Can Trust
            </div>
        </div>

        <div class="line"></div>

        <div class="center title">
            PAYMENT RECEIPT
        </div>

        <div class="line"></div>

        <div class="row">
            <span class="label">Receipt No:</span>
            <span class="value">RC-{{ now()->format('ymd') }}-{{ str_pad($appointment->id, 4, '0', STR_PAD_LEFT) }}</span>
        </div>

        <div class="row">
            <span class="label">Date:</span>
            <span class="value">{{ now()->format('d M Y h:i A') }}</span>
        </div>

        <div class="line"></div>

        <div class="row">
            <span class="label">Patient:</span>
            <span class="value">{{ $appointment->full_name }}</span>
        </div>

        <div class="row">
            <span class="label">Booking:</span>
            <span class="value">{{ $appointment->booking_code }}</span>
        </div>

        <div class="row">
            <span class="label">Dept:</span>
            <span class="value">{{ $appointment->department }}</span>
        </div>

        <div class="row">
            <span class="label">Doctor:</span>
            <span class="value">{{ $appointment->doctor_name ?? 'N/A' }}</span>
        </div>

        <div class="line"></div>

        <div class="row">
            <span class="label">Amount:</span>
            <span class="value amount">₦{{ number_format($appointment->billing_amount, 2) }}</span>
        </div>

        <div class="row">
            <span class="label">Status:</span>
            <span class="value">{{ strtoupper($appointment->payment_status) }}</span>
        </div>

        <div class="row">
            <span class="label">Method:</span>
            <span class="value">Cash</span>
        </div>

        <div class="line"></div>

        <div class="center">
            <div>Next Department</div>
            <div class="department">{{ $appointment->next_department ?? 'N/A' }}</div>
        </div>

        <div class="line"></div>

        <div>
            <strong>Payment Note:</strong>
            <div class="note">
                {{ $appointment->payment_note ?? 'No payment note' }}
            </div>
        </div>

        <div class="line"></div>

        <div class="center">
            Thank you for choosing SmartClinic.<br>
            We wish you quick recovery.
        </div>

        <div class="barcode">
            ||||||||||||
        </div>

        <div class="barcode-text">
            {{ $appointment->booking_code }}
        </div>

        <div class="line"></div>

        <div class="signature">
            <div class="signature-line"></div>
            Cashier Signature
        </div>

        <div class="line"></div>

        <div class="center">
            *** THANK YOU ***
        </div>

    </div>

</body>
</html>