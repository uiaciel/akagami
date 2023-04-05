<div class="mt-4">
    <div class="d-flex justify-content-between">
        <div>
            <span>{{ \Carbon\Carbon::parse($tahun)->format('Y') }} 年以降の乗船経歴</span><br />
            <h5>Experience since {{ \Carbon\Carbon::parse($tahun)->format('Y') }}</h5>
        </div>
        <div>
            <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#addExp"
                aria-expanded="false" aria-controls="collapseExample">
                Add Exp
            </button>
        </div>
    </div>
    <style>
        #tableexp {
            width: 100%;
        }

        #tableexp tr,
        #tableexp th,
        #tableexp td {
            border: 1px solid;
            text-align: center;
            font-size: 9px;
            padding: 5px;
        }
    </style>
    <table id="tableexp">
        <thead>
            <tr>
                <th>船名<br>Vessel Name</th>
                <th>所属<br>Affiliation</th>
                <th>乗船日<br>Sign On</th>
                <th>下船日<br>Sign Off</th>
                <th>乗船期限（月）<br>Period (Month)</th>
                <th>基本給<br>Salary</th>
                <th>ボーナス<br>Bonus</th>
                <th>職種<br>Job</th>
                <th>船籍<br>Ship Flag</th>
                <th>凍結・生<br>Raw Freezing</th>
                <th>種別<br>Type</th>
                <th>主漁場<br>F/G</th>
                <th>トン数<br>Tonnage</th>
                <th>漁労長<br>F/M</th>
                <th>寒冷<br>Cold Area</th>
                <th>下船理由<br>Disembark.<br>Reason</th>
                <th>評価<br>Grade</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($exp as $exp)
                <tr>
                    <td>{{ $exp->shipname->name }}
                        {{ $exp->maru }} {{ $exp->number }}</td>
                    <td>{{ $exp->affiliation }}</td>
                    <td>{{ $exp->signon }}</td>
                    <td>{{ $exp->signoff }}</td>
                    <td>{{ $exp->periode }}</td>
                    <td>{{ $exp->currencysalary }} {{ $exp->salary }}</td>
                    <td>{{ $exp->currencybonus }} {{ $exp->bonus }}</td>
                    <td>{{ $exp->job->code }}</td>
                    <td>{{ $exp->shipflag }}</td>
                    <td>{{ $exp->freezer }}</td>
                    <td>{{ $exp->type }}</td>
                    <td>{{ $exp->fishingground }}</td>
                    <td>{{ $exp->tonnage }}</td>
                    <td>{{ $exp->fishingmaster }}</td>
                    <td>{{ $exp->coldarea }}</td>
                    <td>{{ $exp->disembark }}</td>
                    <td>{{ $exp->grade }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Button trigger modal -->

    {{-- <button class="btn btn-primary btn-sm mt-3" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        Add Experience
                                    </button> --}}
</div>
