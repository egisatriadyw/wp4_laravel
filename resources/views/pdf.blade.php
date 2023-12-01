<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio CV</title>
</head>

<body>
  <div id="firejet-html-app" style="width: 10000vw; height: 10000vh">
    <div class="resume-your-name-background">
      <div class="resume-your-name-box_box_058box_048049050x">
        <div class="resume-your-name-box_058box_048049x">
          <div class="resume-your-name-photo"><img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('assets/imgs/' . $homeRecord[0]->profile))) }}" alt=""></div>
            <div class="resume-your-name-box_048049x">
              <p class="resume-your-name-name">{{ @$homeRecord[0]->your_name}}</p>
              <p class="resume-your-name-position">{{ @$homeRecord[0]->work_experience}}</p>
              <p class="resume-your-name-over-5years-of-prof">{{ @$homeRecord[0]->description}}</p>
            </div>
            <div class="resume-your-name-box_053056055052054057x">
              <p class="resume-your-name-email">Email</p>
              <p class="resume-your-name-kate-bishop-katedesi">{{ @$aboutRecord[0]->email }}</p>
              <p class="resume-your-name-linked-in">LinkedIn</p>
              <p class="resume-your-name-linkedin-com-in-kate">linkedin.com/in/kate-bishop</p>
              <p class="resume-your-name-phone">Phone</p>
              <p class="resume-your-name-component">{{ @$aboutRecord[0]->phone }}</p>
            </div>
            <div class="resume-your-name-resume-your-name">
              <div class="resume-your-name-box_090110120140150200210170180230240260270607x">
              <p class="resume-your-name-section-title">Education</p>
                <?php foreach ($educationRecord as $index => $record): ?>
                    <p class="resume-your-name-headline-<?= $index+1 ?>"><?= $record->tingkat_pendidikan ?></p>
                    <p class="resume-your-name-label-<?= $index+1 ?>"><?= $record->nama_instansi ?>, <?= $record->tahun_masuk ?> - <?= $record->tahun_lulus ?></p>
                <?php endforeach; ?>
                <!-- <p class="resume-your-name-headline-5">Branding fundamentals</p>
                <p class="resume-your-name-label-5">Design Lab Inc., Nov 2014</p>
                 -->
              <p class="resume-your-name-section-title-1">Experience</p>
                <?php foreach ($experienceRecord as $index => $record): ?>
                    <p class="resume-your-name-headline-<?= $index+1 ?>"><?= $record->organisasi ?></p>
                    <p class="resume-your-name-label-<?= $index+1 ?>"><?= $record->jabatan ?> <?= $record->bidang ?></p>
                    <p class="resume-your-name-description"><?= $record->keterangan ?></p>
                <?php endforeach; ?>
              </div>
              <div class="resume-your-name-box_029031032033035037036039041040043045044x">
                <p class="resume-your-name-section-title-2">Skill</p>
                <?php foreach ($skillRecord as $index => $record): ?>
                    <p class="resume-your-name-headline-<?= $index+1 ?>"><?= $record->skill ?></p>
                    <p class="resume-your-name-label-<?= $index+1 ?>"><?= $record->percentage ?>%</p>
                <?php endforeach; ?>
                <!-- <p class="resume-your-name-headline-6">{{ @$skillRecord[0]->skill }}</p>
                <p class="resume-your-name-label-6">{{ @$skillRecord[0]->percentage }} %</p>
                <p class="resume-your-name-headline-7">{{ @$skillRecord[1]->skill }}</p>
                <p class="resume-your-name-label-7">{{ @$skillRecord[1]->percentage }} %</p>
                <p class="resume-your-name-headline-8">{{ @$skillRecord[2]->skill }}</p>
                <p class="resume-your-name-label-8">{{ @$skillRecord[2]->percentage }} %</p>
                <p class="resume-your-name-headline-9">{{ @$skillRecord[3]->skill }}</p>
                <p class="resume-your-name-label-9">{{ @$skillRecord[3]->percentage }} %</p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<style>
  p,
  ol,
  ul {
    margin: 0px;
  }

  button {
    padding: 0px;
  }

  ol,
  ul {
    padding-inline-start: 1.5em;
  }

  .resume-your-name-resume-your-name {
    text-align: left;
    padding-right: 250px;
    padding-bottom: 16px;
    padding-left: 32px;
    padding-top: 32px;
    background-color: rgba(255, 255, 255, 1);
    position: relative;
    box-sizing: border-box;
    height: 842px;
    width: 595px;
  }

  .resume-your-name-box_090110120140150200210170180230240260270607x {
    bottom: 275px;
    right: 270px;
    flex-direction: column;
    display: flex;
    position: absolute;
    box-sizing: border-box;
    height: 586px;
    width: 258px;
  }

  .resume-your-name-section-title {
    width: 150px;
    height: 20px;
    color: rgba(28, 142, 181, 1);
    line-height: 20px;
    font-weight: 500;
    font-size: 14px;
    font-family: Poppins;
  }

  .resume-your-name-headline {
    width: 258px;
    height: 20px;
    margin-top: 12px;
    color: rgba(34, 34, 34, 1);
    line-height: 20px;
    font-weight: 700;
    font-size: 12px;
    font-family: Poppins;
  }

  .resume-your-name-label {
    height: 32px;
    color: rgba(121, 121, 121, 1);
    line-height: 16px;
    font-weight: 400;
    font-size: 11px;
    font-family: Prata;
    width: 245px;
  }

  .resume-your-name-headline-1 {
    width: 108px;
    height: 20px;
    margin-top: 16px;
    color: rgba(34, 34, 34, 1);
    line-height: 20px;
    font-weight: 700;
    font-size: 12px;
    font-family: Poppins;
  }

  .resume-your-name-label-1 {
    height: 32px;
    color: rgba(121, 121, 121, 1);
    line-height: 16px;
    font-weight: 400;
    font-size: 11px;
    font-family: Prata;
    width: 245px;
  }

  .resume-your-name-headline-2 {
    width: 192px;
    height: 20px;
    margin-top: 24px;
    color: rgba(34, 34, 34, 1);
    line-height: 20px;
    font-weight: 700;
    font-size: 12px;
    font-family: Poppins;
  }

  .resume-your-name-label-2 {
    height: 16px;
    color: rgba(121, 121, 121, 1);
    line-height: 16px;
    font-weight: 400;
    font-size: 11px;
    font-family: Prata;
    width: 245px;
  }

  .resume-your-name-headline-3 {
    width: 137px;
    height: 20px;
    margin-top: 10px;
    color: rgba(34, 34, 34, 1);
    line-height: 20px;
    font-weight: 700;
    font-size: 12px;
    font-family: Poppins;
  }

  .resume-your-name-label-3 {
    height: 16px;
    color: rgba(121, 121, 121, 1);
    line-height: 16px;
    font-weight: 400;
    font-size: 11px;
    font-family: Prata;
    width: 245px;
  }

  .resume-your-name-headline-4 {
    width: 152px;
    height: 20px;
    margin-top: 10px;
    color: rgba(34, 34, 34, 1);
    line-height: 20px;
    font-weight: 700;
    font-size: 12px;
    font-family: Poppins;
  }

  .resume-your-name-label-4 {
    height: 32px;
    color: rgba(121, 121, 121, 1);
    line-height: 16px;
    font-weight: 400;
    font-size: 11px;
    font-family: Prata;
    width: 245px;
  }

  .resume-your-name-headline-5 {
    width: 148px;
    height: 20px;
    margin-top: 10px;
    color: rgba(34, 34, 34, 1);
    line-height: 20px;
    font-weight: 700;
    font-size: 12px;
    font-family: Poppins;
  }

  .resume-your-name-label-5 {
    height: 16px;
    color: rgba(121, 121, 121, 1);
    line-height: 16px;
    font-weight: 400;
    font-size: 11px;
    font-family: Prata;
    width: 245px;
  }

  .resume-your-name-section-title-1 {
    width: 35px;
    height: 20px;
    margin-top: 24px;
    color: rgba(28, 142, 181, 1);
    line-height: 20px;
    font-weight: 500;
    font-size: 14px;
    font-family: Poppins;
  }

  .resume-your-name-description {
    width: 245px;
    height: 168px;
    margin-top: 8px;
    color: rgba(34, 34, 34, 1);
    line-height: 14px;
    font-weight: 400;
    font-size: 10px;
    font-family: Poppins;
    flex-grow: 1;
  }

  .resume-your-name-box_029031032033035037036039041040043045044x {
    width: 100%;
    height: 100%;
    flex-direction: column;
    display: flex;
    box-sizing: border-box;
    /* left: 20px; */
  }

  .resume-your-name-section-title-2 {
    width: 118px;
    height: 20px;
    color: rgba(28, 142, 181, 1);
    line-height: 20px;
    font-weight: 500;
    font-size: 14px;
    font-family: Poppins;
  }

  .resume-your-name-headline-6 {
    width: 124px;
    height: 20px;
    margin-top: 12px;
    color: rgba(34, 34, 34, 1);
    line-height: 20px;
    font-weight: 700;
    font-size: 14px;
    font-family: Poppins;
  }

  .resume-your-name-label-6 {
    width: 133px;
    height: 16px;
    color: rgba(121, 121, 121, 1);
    line-height: 16px;
    font-weight: 400;
    font-size: 11px;
    font-family: Prata;
  }

  .resume-your-name-description-1 {
    height: 56px;
    margin-top: 8px;
    color: rgba(34, 34, 34, 1);
    line-height: 14px;
    font-weight: 400;
    font-size: 10px;
    font-family: Poppins;
    width: 254px;
  }

  .resume-your-name-headline-7 {
    width: 88px;
    height: 20px;
    margin-top: 24px;
    color: rgba(34, 34, 34, 1);
    line-height: 20px;
    font-weight: 700;
    font-size: 14px;
    font-family: Poppins;
  }

  .resume-your-name-label-7 {
    width: 202px;
    height: 16px;
    color: rgba(121, 121, 121, 1);
    line-height: 16px;
    font-weight: 400;
    font-size: 11px;
    font-family: Prata;
  }

  .resume-your-name-description-2 {
    height: 84px;
    margin-top: 8px;
    color: rgba(34, 34, 34, 1);
    line-height: 14px;
    font-weight: 400;
    font-size: 10px;
    font-family: Poppins;
    width: 254px;
  }

  .resume-your-name-headline-8 {
    width: 162px;
    height: 20px;
    margin-top: 24px;
    color: rgba(34, 34, 34, 1);
    line-height: 20px;
    font-weight: 700;
    font-size: 14px;
    font-family: Poppins;
  }

  .resume-your-name-label-8 {
    width: 159px;
    height: 16px;
    color: rgba(121, 121, 121, 1);
    line-height: 16px;
    font-weight: 400;
    font-size: 11px;
    font-family: Prata;
  }

  .resume-your-name-description-3 {
    width: 254px;
    height: 98px;
    margin-top: 8px;
    color: rgba(34, 34, 34, 1);
    line-height: 14px;
    font-weight: 400;
    font-size: 10px;
    font-family: Poppins;
    flex-grow: 1;
  }

  .resume-your-name-headline-9 {
    width: 79px;
    height: 20px;
    margin-top: 24px;
    color: rgba(34, 34, 34, 1);
    line-height: 20px;
    font-weight: 700;
    font-size: 14px;
    font-family: Poppins;
  }

  .resume-your-name-label-9 {
    width: 162px;
    height: 16px;
    color: rgba(121, 121, 121, 1);
    line-height: 16px;
    font-weight: 400;
    font-size: 11px;
    font-family: Prata;
  }

  .resume-your-name-description-4 {
    height: 84px;
    margin-top: 8px;
    color: rgba(34, 34, 34, 1);
    line-height: 14px;
    font-weight: 400;
    font-size: 10px;
    font-family: Poppins;
    width: 254px;
  }

  .resume-your-name-background {
    font-family: Poppins;
    padding-right: 250px;
    padding-bottom: 16px;
    padding-left: 32px;
    padding-top: 32px;
    margin-right: auto;
    margin-left: auto;
    right: 0;
    background-color: rgba(228, 246, 251, 0.5);
    top: 0;
    left: 0;
    position: absolute;
    box-sizing: border-box;
    height: 176px;
    width: 420px;
  }

  .resume-your-name-box_box_058box_048049050x {
    width: 100%;
    height: 100%;
    justify-content: space-between;
    flex-direction: column;
    display: flex;
    gap: 14px;
    box-sizing: border-box;
  }

  .resume-your-name-box_058box_048049x {
    align-items: center;
    justify-content: space-between;
    display: flex;
    gap: 12px;
    box-sizing: border-box;
  }

  /* .resume-your-name-photo {
    border-radius: 72px;
    background-size: cover;
    background-position: center;
    /* background-image: {{ url('public/assets/imgs/'.@$homeRecord[0]->profile) }}; 
    box-shadow-width: 1px;
    box-shadow: 0px 0px 0px 1px rgba(217, 217, 217, 1) inset;
    box-sizing: border-box;
    height: 58px;
    width: 58px;
  } */

  .resume-your-name-photo {
        border-radius: 72px;
        background-size: cover;
        background-position: center;
        box-shadow-width: 1px;
        box-shadow: 0px 0px 0px 1px rgba(217, 217, 217, 1) inset;
        box-sizing: border-box;
        height: 58px;
        width: 58px;
        overflow: hidden; /* Menyembunyikan bagian gambar yang mungkin keluar dari batas div */
    }

    .resume-your-name-photo img {
        width: 100%; /* Agar gambar tetap responsif dan mengikuti lebar div */
        height: auto; /* Sesuaikan tinggi agar mempertahankan aspek rasio */
        display: block; Mengatasi whitespace yang muncul di bagian bawah gambar
    }


  .resume-your-name-box_048049x {
    gap: 0;
    height: 100%;
    flex-grow: 1;
    justify-content: space-between;
    flex-direction: column;
    display: flex;
    box-sizing: border-box;
  }

  .resume-your-name-name {
    width:300px;
    height: 34px;
    color: rgba(34, 34, 34, 1);
    line-height: 34px;
    font-weight: 600;
    font-size: 26px;
  }

  .resume-your-name-position {
    width: 139px;
    height: 24px;
    color: rgba(28, 142, 181, 1);
    line-height: 24px;
    font-weight: 500;
    font-size: 16px;
    top: 20px;
  }

  .resume-your-name-over-5years-of-prof {
    height: 56px;
    color: rgba(34, 34, 34, 1);
    line-height: 14px;
    font-weight: 400;
    font-size: 10px;
    width: 313px;
  }

  .resume-your-name-box_053056055052054057x {
    bottom: 28px;
    right: 56px;
    flex-direction: column;
    display: flex;
    position: absolute;
    box-sizing: border-box;
    height: 108px;
    width: 154px;
    font-size: 10px;
    line-height: 14px;
  }

  .resume-your-name-email {
    flex-grow: 1;
    width: 28px;
    height: 14px;
    color: rgba(28, 142, 181, 1);
    font-weight: 500;
  }

  .resume-your-name-kate-bishop-katedesi {
    flex-grow: 1;
    width: 154px;
    height: 14px;
    color: rgba(34, 34, 34, 1);
    text-decoration: underline;
    font-weight: 600;
  }

  .resume-your-name-linked-in {
    flex-grow: 1;
    width: 42px;
    height: 14px;
    margin-top: 12px;
    color: rgba(28, 142, 181, 1);
    font-weight: 500;
  }

  .resume-your-name-linkedin-com-in-kate {
    flex-grow: 1;
    width: 149px;
    height: 14px;
    color: rgba(0, 0, 0, 1);
    text-decoration: underline;
    font-weight: 600;
  }

  .resume-your-name-phone {
    flex-grow: 1;
    width: 32px;
    height: 14px;
    margin-top: 12px;
    color: rgba(28, 142, 181, 1);
    font-weight: 500;
  }

  .resume-your-name-component {
    flex-grow: 1;
    width: 86px;
    height: 14px;
    color: rgba(34, 34, 34, 1);
    text-decoration: underline;
    font-weight: 600;
  }
</style>

</html>