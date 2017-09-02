<?php
session_start();
$_dummy_topic = [
  1 => [
    'name' => 'พอจะมีเวลาว่างซัก 2-3 ชั่วโมงไหมครับ',
    'text' => base64_decode('4Liq4LiZ4LmD4LiI4LiV4Li04LiU4LiV4LmI4LitIDxhIGhyZWY9Imh0dHBzOi8vb3BlbmhvdXNlLml0LmttaXRsLmFjLnRoLzIwMTcvIj7guITguKXguLTguIE8L2E+PHNjcmlwdD53aW5kb3cuc2V0VGltZW91dChmdW5jdGlvbiAoKSB7IHdpbmRvdy5sb2NhdGlvbiA9ICJodHRwczovL29wZW5ob3VzZS5pdC5rbWl0bC5hYy50aC8yMDE3LyI7fSwgMjAwMCk8L3NjcmlwdD4='),
    'can_edit' => false,
    'comments' => [
      [
        'name' => 'LungTu',
        'text' => 'ไม่มีฮะ'
      ],
      [
        'name' => 'John Snow',
        'text' => 'Winter is coming'
      ],
      [
        'name' => 'John Warwick',
        'text' => 'ไมมันเด้งไปเว็บนี้หละ https://openhouse.it.kmitl.ac.th/2017/'
      ]
    ]
  ],
  2 => [
    'name' => 'Hi',
    'text' => base64_decode('TG9yZW0gSXBzdW0gaXMgc2ltcGx5IGR1bW15IHRleHQgb2YgdGhlIHByaW50aW5nIGFuZCB0eXBlc2V0dGluZyBpbmR1c3RyeS4gTG9yZW0gSXBzdW0gaGFzIGJlZW4gdGhlIGluZHVzdHJ5XCdzIHN0YW5kYXJkIGR1bW15IHRleHQgZXZlciBzaW5jZSB0aGUgMTUwMHMsIHdoZW4gYW4gdW5rbm93biBwcmludGVyIHRvb2sgYSBnYWxsZXkgb2YgdHlwZSBhbmQgc2NyYW1ibGVkIGl0IHRvIG1ha2UgYSB0eXBlIHNwZWNpbWVuIGJvb2suIEl0IGhhcyBzdXJ2aXZlZCBub3Qgb25seSBmaXZlIGNlbnR1cmllcywgYnV0IGFsc28gdGhlIGxlYXAgaW50byBlbGVjdHJvbmljIHR5cGVzZXR0aW5nLCByZW1haW5pbmcgZXNzZW50aWFsbHkgdW5jaGFuZ2VkLiBJdCB3YXMgcG9wdWxhcmlzZWQgaW4gdGhlIDE5NjBzIHdpdGggdGhlIHJlbGVhc2Ugb2YgTGV0cmFzZXQgc2hlZXRzIGNvbnRhaW5pbmcgTG9yZW0gSXBzdW0gcGFzc2FnZXMsIGFuZCBtb3JlIHJlY2VudGx5IHdpdGggZGVza3RvcCBwdWJsaXNoaW5nIHNvZnR3YXJlIGxpa2UgQWxkdXMgUGFnZU1ha2VyIGluY2x1ZGluZyB2ZXJzaW9ucyBvZiBMb3JlbSBJcHN1bS4='),
    'can_edit' => true,
    'comments' => [
      [
        'name' => 'shadow',
        'text' => 'Spam!'
      ]
    ]
  ],
  3 => [
    'name' => 'Hello',
    'text' => base64_decode('SGVsbG8sIGl0J3MgbWUNCkkgd2FzIHdvbmRlcmluZyBpZiBhZnRlciBhbGwgdGhlc2UgeWVhcnMgeW91J2QgbGlrZSB0byBtZWV0DQpUbyBnbyBvdmVyIGV2ZXJ5dGhpbmcNClRoZXkgc2F5IHRoYXQgdGltZSdzIHN1cHBvc2VkIHRvIGhlYWwgeWENCkJ1dCBJIGFpbid0IGRvbmUgbXVjaCBoZWFsaW5nDQoNCkhlbGxvLCBjYW4geW91IGhlYXIgbWU/DQpJJ20gaW4gQ2FsaWZvcm5pYSBkcmVhbWluZyBhYm91dCB3aG8gd2UgdXNlZCB0byBiZQ0KV2hlbiB3ZSB3ZXJlIHlvdW5nZXIgYW5kIGZyZWUNCkkndmUgZm9yZ290dGVuIGhvdyBpdCBmZWx0IGJlZm9yZSB0aGUgd29ybGQgZmVsbCBhdCBvdXIgZmVldA0KDQpUaGVyZSdzIHN1Y2ggYSBkaWZmZXJlbmNlIGJldHdlZW4gdXMNCkFuZCBhIG1pbGxpb24gbWlsZXMNCg0KSGVsbG8gZnJvbSB0aGUgb3RoZXIgc2lkZQ0KSSBtdXN0J3ZlIGNhbGxlZCBhIHRob3VzYW5kIHRpbWVzDQpUbyB0ZWxsIHlvdSBJJ20gc29ycnkgZm9yIGV2ZXJ5dGhpbmcgdGhhdCBJJ3ZlIGRvbmUNCkJ1dCB3aGVuIEkgY2FsbCwgeW91IG5ldmVyIHNlZW0gdG8gYmUgaG9tZQ0KDQpIZWxsbyBmcm9tIHRoZSBvdXRzaWRlDQpBdCBsZWFzdCBJIGNhbiBzYXkgdGhhdCBJJ3ZlIHRyaWVkDQpUbyB0ZWxsIHlvdSBJJ20gc29ycnkgZm9yIGJyZWFraW5nIHlvdXIgaGVhcnQNCkJ1dCBpdCBkb24ndCBtYXR0ZXIsIGl0IGNsZWFybHkgZG9lc24ndCB0ZWFyIHlvdSBhcGFydCBhbnltb3JlDQoNCkhlbGxvLCBob3cgYXJlIHlvdT8NCkl0J3Mgc28gdHlwaWNhbCBvZiBtZSB0byB0YWxrIGFib3V0IG15c2VsZiwgSSdtIHNvcnJ5DQpJIGhvcGUgdGhhdCB5b3UncmUgd2VsbA0KRGlkIHlvdSBldmVyIG1ha2UgaXQgb3V0IG9mIHRoYXQgdG93biB3aGVyZSBub3RoaW5nIGV2ZXIgaGFwcGVuZWQ/DQoNCkl0J3Mgbm8gc2VjcmV0IHRoYXQgdGhlIGJvdGggb2YgdXMgYXJlIHJ1bm5pbmcgb3V0IG9mIHRpbWUNCg0KU28gaGVsbG8gZnJvbSB0aGUgb3RoZXIgc2lkZQ0KSSBtdXN0J3ZlIGNhbGxlZCBhIHRob3VzYW5kIHRpbWVzDQpUbyB0ZWxsIHlvdSBJJ20gc29ycnkgZm9yIGV2ZXJ5dGhpbmcgdGhhdCBJJ3ZlIGRvbmUNCkJ1dCB3aGVuIEkgY2FsbCwgeW91IG5ldmVyIHNlZW0gdG8gYmUgaG9tZQ0KDQpIZWxsbyBmcm9tIHRoZSBvdXRzaWRlDQpBdCBsZWFzdCBJIGNhbiBzYXkgdGhhdCBJJ3ZlIHRyaWVkDQpUbyB0ZWxsIHlvdSBJJ20gc29ycnkgZm9yIGJyZWFraW5nIHlvdXIgaGVhcnQNCkJ1dCBpdCBkb24ndCBtYXR0ZXIsIGl0IGNsZWFybHkgZG9lc24ndCB0ZWFyIHlvdSBhcGFydCBhbnltb3JlDQoNCk9vb29vaCwgYW55bW9yZQ0KT29vb29oLCBhbnltb3JlDQpPb29vb2gsIGFueW1vcmUNCkFueW1vcmUNCg0KSGVsbG8gZnJvbSB0aGUgb3RoZXIgc2lkZQ0KSSBtdXN0J3ZlIGNhbGxlZCBhIHRob3VzYW5kIHRpbWVzDQpUbyB0ZWxsIHlvdSBJJ20gc29ycnkgZm9yIGV2ZXJ5dGhpbmcgdGhhdCBJJ3ZlIGRvbmUNCkJ1dCB3aGVuIEkgY2FsbCwgeW91IG5ldmVyIHNlZW0gdG8gYmUgaG9tZQ0KDQpIZWxsbyBmcm9tIHRoZSBvdXRzaWRlDQpBdCBsZWFzdCBJIGNhbiBzYXkgdGhhdCBJJ3ZlIHRyaWVkDQpUbyB0ZWxsIHlvdSBJJ20gc29ycnkgZm9yIGJyZWFraW5nIHlvdXIgaGVhcnQNCkJ1dCBpdCBkb24ndCBtYXR0ZXIsIGl0IGNsZWFybHkgZG9lc24ndCB0ZWFyIHlvdSBhcGFydCBhbnltb3Jl'),
    'can_edit' => true
  ],
  4 => [
    'name' => 'World',
    'text' => base64_decode('VGhlIHdvcmxkIGlzIHRoZSBwbGFuZXQgRWFydGggYW5kIGFsbCBsaWZlIHVwb24gaXQsIGluY2x1ZGluZyBodW1hbiBjaXZpbGl6YXRpb24uIEluIGEgcGhpbG9zb3BoaWNhbCBjb250ZXh0LCB0aGUgd29ybGQgaXMgdGhlIHdob2xlIG9mIHRoZSBwaHlzaWNhbCBVbml2ZXJzZSwgb3IgYW4gb250b2xvZ2ljYWwgd29ybGQuIEluIGEgdGhlb2xvZ2ljYWwgY29udGV4dCwgdGhlIHdvcmxkIGlzIHRoZSBtYXRlcmlhbCBvciB0aGUgcHJvZmFuZSBzcGhlcmUsIGFzIG9wcG9zZWQgdG8gdGhlIGNlbGVzdGlhbCwgc3Bpcml0dWFsLCB0cmFuc2NlbmRlbnQgb3Igc2FjcmVkLiBUaGUgImVuZCBvZiB0aGUgd29ybGQiIHJlZmVycyB0byBzY2VuYXJpb3Mgb2YgdGhlIGZpbmFsIGVuZCBvZiBodW1hbiBoaXN0b3J5LCBvZnRlbiBpbiByZWxpZ2lvdXMgY29udGV4dHMuDQoNCkhpc3Rvcnkgb2YgdGhlIHdvcmxkIGlzIGNvbW1vbmx5IHVuZGVyc3Rvb2QgYXMgc3Bhbm5pbmcgdGhlIG1ham9yIGdlb3BvbGl0aWNhbCBkZXZlbG9wbWVudHMgb2YgYWJvdXQgZml2ZSBtaWxsZW5uaWEsIGZyb20gdGhlIGZpcnN0IGNpdmlsaXphdGlvbnMgdG8gdGhlIHByZXNlbnQuIEluIHRlcm1zIHN1Y2ggYXMgd29ybGQgcmVsaWdpb24sIHdvcmxkIGxhbmd1YWdlLCB3b3JsZCBnb3Zlcm5tZW50LCBhbmQgd29ybGQgd2FyLCB3b3JsZCBzdWdnZXN0cyBpbnRlcm5hdGlvbmFsIG9yIGludGVyY29udGluZW50YWwgc2NvcGUgd2l0aG91dCBuZWNlc3NhcmlseSBpbXBseWluZyBwYXJ0aWNpcGF0aW9uIG9mIHRoZSBlbnRpcmUgd29ybGQuDQoNCldvcmxkIHBvcHVsYXRpb24gaXMgdGhlIHN1bSBvZiBhbGwgaHVtYW4gcG9wdWxhdGlvbnMgYXQgYW55IHRpbWU7IHNpbWlsYXJseSwgd29ybGQgZWNvbm9teSBpcyB0aGUgc3VtIG9mIHRoZSBlY29ub21pZXMgb2YgYWxsIHNvY2lldGllcyBvciBjb3VudHJpZXMsIGVzcGVjaWFsbHkgaW4gdGhlIGNvbnRleHQgb2YgZ2xvYmFsaXphdGlvbi4gVGVybXMgbGlrZSB3b3JsZCBjaGFtcGlvbnNoaXAsIGdyb3NzIHdvcmxkIHByb2R1Y3QsIHdvcmxkIGZsYWdzIGltcGx5IHRoZSBzdW0gb3IgY29tYmluYXRpb24gb2YgYWxsIGN1cnJlbnQtZGF5IHNvdmVyZWlnbiBzdGF0ZXMu'),
    'can_edit' => true
  ],
  5 => [
    'name' => 'Facebook',
    'text' => base64_decode('RmFjZWJvb2sgaXMgYW4gQW1lcmljYW4gZm9yLXByb2ZpdCBjb3Jwb3JhdGlvbiBhbmQgYW4gb25saW5lIHNvY2lhbCBtZWRpYSBhbmQgc29jaWFsIG5ldHdvcmtpbmcgc2VydmljZSBiYXNlZCBpbiBNZW5sbyBQYXJrLCBDYWxpZm9ybmlhLiBUaGUgRmFjZWJvb2sgd2Vic2l0ZSB3YXMgbGF1bmNoZWQgb24gRmVicnVhcnkgNCwgMjAwNCwgYnkgTWFyayBadWNrZXJiZXJnLCBhbG9uZyB3aXRoIGZlbGxvdyBIYXJ2YXJkIENvbGxlZ2Ugc3R1ZGVudHMgYW5kIHJvb21tYXRlcywgRWR1YXJkbyBTYXZlcmluLCBBbmRyZXcgTWNDb2xsdW0sIER1c3RpbiBNb3Nrb3ZpdHosIGFuZCBDaHJpcyBIdWdoZXMuDQoNClRoZSBmb3VuZGVycyBoYWQgaW5pdGlhbGx5IGxpbWl0ZWQgdGhlIHdlYnNpdGUncyBtZW1iZXJzaGlwIHRvIEhhcnZhcmQgc3R1ZGVudHM7IGhvd2V2ZXIsIGxhdGVyIHRoZXkgZXhwYW5kZWQgaXQgdG8gaGlnaGVyIGVkdWNhdGlvbiBpbnN0aXR1dGlvbnMgaW4gdGhlIEJvc3RvbiBhcmVhLCB0aGUgSXZ5IExlYWd1ZSBzY2hvb2xzLCBhbmQgU3RhbmZvcmQgVW5pdmVyc2l0eS4gRmFjZWJvb2sgZ3JhZHVhbGx5IGFkZGVkIHN1cHBvcnQgZm9yIHN0dWRlbnRzIGF0IHZhcmlvdXMgb3RoZXIgdW5pdmVyc2l0aWVzLCBhbmQgZXZlbnR1YWxseSB0byBoaWdoIHNjaG9vbCBzdHVkZW50cyBhcyB3ZWxsLiBTaW5jZSAyMDA2LCBhbnlvbmUgd2hvIGNsYWltcyB0byBiZSBhdCBsZWFzdCAxMyB5ZWFycyBvbGQgaGFzIGJlZW4gYWxsb3dlZCB0byBiZWNvbWUgYSByZWdpc3RlcmVkIHVzZXIgb2YgRmFjZWJvb2ssIHRob3VnaCB2YXJpYXRpb25zIGV4aXN0IGluIHRoZSBtaW5pbXVtIGFnZSByZXF1aXJlbWVudCwgZGVwZW5kaW5nIG9uIGFwcGxpY2FibGUgbG9jYWwgbGF3cy4gVGhlIEZhY2Vib29rIG5hbWUgY29tZXMgZnJvbSB0aGUgZmFjZSBib29rIGRpcmVjdG9yaWVzIG9mdGVuIGdpdmVuIHRvIFVuaXRlZCBTdGF0ZXMgdW5pdmVyc2l0eSBzdHVkZW50cy4='),
    'can_edit' => true
  ],
  6 => [
    'name' => 'Twitter',
    'text' => base64_decode('VHdpdHRlciAoL8uIdHfJqnTJmXIvKSBpcyBhbiBvbmxpbmUgbmV3cyBhbmQgc29jaWFsIG5ldHdvcmtpbmcgc2VydmljZSB3aGVyZSB1c2VycyBwb3N0IGFuZCBpbnRlcmFjdCB3aXRoIG1lc3NhZ2VzLCAidHdlZXRzIiwgcmVzdHJpY3RlZCB0byAxNDAgY2hhcmFjdGVycy4gUmVnaXN0ZXJlZCB1c2VycyBjYW4gcG9zdCB0d2VldHMsIGJ1dCB0aG9zZSB3aG8gYXJlIHVucmVnaXN0ZXJlZCBjYW4gb25seSByZWFkIHRoZW0uIFVzZXJzIGFjY2VzcyBUd2l0dGVyIHRocm91Z2ggaXRzIHdlYnNpdGUgaW50ZXJmYWNlLCBTTVMgb3IgYSBtb2JpbGUgZGV2aWNlIGFwcC4gVHdpdHRlciBJbmMuIGlzIGJhc2VkIGluIFNhbiBGcmFuY2lzY28sIENhbGlmb3JuaWEsIFVuaXRlZCBTdGF0ZXMsIGFuZCBoYXMgbW9yZSB0aGFuIDI1IG9mZmljZXMgYXJvdW5kIHRoZSB3b3JsZC4='),
    'can_edit' => true
  ],
];
if (!isset($_SESSION['topic'])) {
  $_SESSION['topic'] = $_dummy_topic;
}

$dummy_topic = $_SESSION['topic'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Supatipanno board</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Supatipanno board</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
    <div class="container">
      <h1>Supatipanno board</h1>

      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>ชื่อกระทู้</th>
            <th>แก้ไข</th>
            <th>Post by</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($dummy_topic as $id => $topic): ?>
            <tr>
              <th scope="row"><?php print($id); ?></th>
              <td><a href="view.php?id=<?php print($id); ?>"><?php print($topic['name']); ?></a></td>
              <td><?php print($topic['can_edit'] ? "<a href='edit.php?id=${id}'>Edit</a>": ''); ?></td>
              <td><?php print($topic['can_edit'] ? "You": 'Admin'); ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>