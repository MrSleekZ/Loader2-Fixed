using MetroFramework.Forms;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using ManualMapInjection.Injection;
using System.IO;
using System.Diagnostics;
using System.Threading;

namespace MetroLoader
{
    public partial class Form2 : MetroForm
    {
        public Form2()
        {
            InitializeComponent();
        }

        private void Form2_Load(object sender, EventArgs e)
        {
            label1.Text = "Starting injection";
            Thread.Sleep(200);
        }

        private void metroButton1_Click(object sender, EventArgs e)
        {
            
        }

        private void timer1_Tick(object sender, EventArgs e)
        {
            label1.Text = "Waiting for CSGO.exe";

            var name = "csgo";
            var target = Process.GetProcessesByName(name).FirstOrDefault();

            if (target != null)
            {
                var file = Settings.file;

                var injector = new ManualMapInjector(target) { AsyncInjection = true };
                MessageBox.Show($"hmodule = 0x{injector.Inject(file).ToInt32():x8}");
                label1.Text = "Successfully injected";
                timer1.Stop();
                timer2.Start();
            }
        }

        private void timer2_Tick(object sender, EventArgs e)
        {
            Application.Exit();
            timer2.Stop();
        }
    }
}

//-----------------------------------------------------
// Coded by /id/Thaisen! Free loader source
// https://github.com/ThaisenPM/Cheat-Loader-CSGO-2.0
// Note to the person using this, removing this
// text is in violation of the license you agreed
// to by downloading. Only you can see this so what
// does it matter anyways.
// Copyright © ThaisenPM 2017
// Licensed under a MIT license
// Read the terms of the license here
// https://github.com/ThaisenPM/Cheat-Loader-CSGO-2.0/blob/master/LICENSE
//-----------------------------------------------------
