namespace Barroc_Intense
{
    partial class Facturen
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.supplieslistBox = new System.Windows.Forms.ListBox();
            this.SuspendLayout();
            // 
            // supplieslistBox
            // 
            this.supplieslistBox.FormattingEnabled = true;
            this.supplieslistBox.Location = new System.Drawing.Point(39, 33);
            this.supplieslistBox.Name = "supplieslistBox";
            this.supplieslistBox.Size = new System.Drawing.Size(289, 303);
            this.supplieslistBox.TabIndex = 1;
            // 
            // Facturen
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(753, 450);
            this.Controls.Add(this.supplieslistBox);
            this.Name = "Facturen";
            this.Text = "Facturen";
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.ListBox supplieslistBox;
    }
}